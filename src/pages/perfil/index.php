<?php
// inicializa a sessão
session_start();

// verifica se o usuário está logado, se não estiver redireciona para a página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../login/index.php");
    exit;
}

// importa o arquivo de configuração
require_once "../../../_bd/Config.php";

// cria e inicializa as variáveis com ""
$login = $name = $cell = "";
$login_err = $name_err = $cell_err = "";

// testa se o método utilizado foi o POST
if($_SERVER["REQUEST_METHOD"] == "POST"){


    //valida login
    if(empty(trim($_POST["login"]))){
        $login_err = "Por favor entre com o email.";
     } else{
        $login = trim($_POST["login"]);
    }


    //valida name
    if(empty(trim($_POST["name"]))){
        $name_err = "Por favor entre com o nome.";
     } else{
        $name = trim($_POST["name"]);
    }

    
    //valida cell
    if(empty(trim($_POST["cell"]))){
        $cell_err = "Por favor entre com o cell.";
     } else{
        $cell = trim($_POST["cell"]);
    }
  

    // checa erros de entrada antes de inserir no bd
    if(empty($login_err) && empty($name_err) && empty($cell_err)){
        // prepara a query de atualização
        $sql = "UPDATE usuarios SET nome = ?, name = ?, cell = ?  WHERE id = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // vincula as variáveis à instrução preparada com parâmetros
            mysqli_stmt_bind_param($stmt, "sssi", $param_login, $param_name, $param_cell, $param_id);
             
            $param_login = $login;
            $param_name = $name;
            $param_cell = $cell;
            $param_id = $_SESSION["id"];

            //armazena as novas informações em sessão
            $_SESSION["login"] = $login;
            $_SESSION["name"] = $name;
            $_SESSION["cell"] = $cell;

            // executa a query preparada
            if(mysqli_stmt_execute($stmt)){
               
                header("location: perfil.php");
            
            } else{
                echo "Desculpe! Algo errado aconteceu. Por favor tente novamente.";
            }

            // fecha a query
            mysqli_stmt_close($stmt);
        }
    }

    // encerra a conexão
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá <?php echo $_SESSION["login"]; ?>!</h2>
                <p class="description description-primary">Esse é seu perfil</p>
                <p class="description description-primary">Você pode editá-lo, caso desejar.</p>
			   <a href="../inicial/index.php"> <button class="btn btn-primary">Voltar</button> </a> 
			   <br>
			   <a href="./newpassword.php"> <button class="btn btn-primary">Alterar senha</button> </a>
			   <br>
			   <a href="./avatar.php"> <button class="btn btn-primary">Adicionar avatar</button> </a> 
			   <br>
			   <a href="./informacoes.php"> <button class="btn btn-primary">Visualizar informações</button> </a> 
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Perfil</h2>

                <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">
                    

                <div class="form-group <?php echo (!empty($login_err)) ? 'has-error' : ''; ?>">
                <label class="label-input" for="">
                        <i class="fas fa-user icon-modify"></i>
                        <input type="text" placeholder="text"  name="login" class="form-control" value="<?php echo $_SESSION["login"]; ?>">
                    </label>
                 </div>
				
				<div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                 <label class="label-input" for="">
                        <i class="fas fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome de usuário" name="name" class="form-control" value="<?php echo $_SESSION["name"]; ?>">
                    </label>
                    <span class="help-block"></span>
				</div>

                <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                <label class="label-input" for="">
                        <i class="fas fa-envelope icon-modify"></i>
                        <input type="email" placeholder="email"  name="email" class="form-control" value="<?php echo $_SESSION["email"]; ?>">
                    </label>
                 </div>
				
				<div class="form-group <?php echo (!empty($cell_err)) ? 'has-error' : ''; ?>">
                 <label class="label-input" for="">
                        <i class="fas fa-phone icon-modify"></i>
                        <input type="number" placeholder="cell" name="cell" class="form-control" value="<?php echo $_SESSION["cell"]; ?>">
                    </label>
				</div>
				

                   <input type="submit" class="btn btn-primary" value="Editar">
                   
                </form>
            </div>
        </div>
    </div>
</body>
</html>
