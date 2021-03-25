<?php
// inicializa a sessão
session_start();

// verifica se o usuário está logado, se não estiver redireciona para a página de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: ../inicial/index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">

        <div class="content first-content">
            <div class="first-column">
                <h2 class="title title-primary">Olá <?php echo $_SESSION["login"];?></h2>
                <p class="description description-primary">Aqui você pode visualizar as informações da sua conta</p>
                <a href="./index.php"> <button class="btn btn-primary">Perfil</button> </a>
                <a href="../inicial/index.php"> <button class="btn btn-primary">Voltar</button> </a>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Dados do perfil</h2>

                <form class="form">

                <div class="form-group">
                 <label class="label-input" for="">
                        <i class="fas fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome de usuário" name="login" class="form-control" value="<?php echo $_SESSION["login"]; ?>" disabled>
                    </label>
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                 <label class="label-input" for="">
                        <i class="fas fa-user icon-modify"></i>
                        <input type="text" placeholder="Nome completo" name="name" class="form-control" value="<?php echo $_SESSION["name"]; ?>" disabled>
                    </label>
                    <span class="help-block"></span>
                </div>

                <div class="form-group">
                <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email"  name="email" class="form-control" value="<?php echo $_SESSION["email"]; ?>" disabled>
                    </label>
                 </div>

                <div class="form-group">
                 <label class="label-input" for="">
                        <i class="fas fa-address-book icon-modify"></i>
                        <input type="text" placeholder="ID avatar" name="idavatar" class="form-control" value="<?php echo $_SESSION["idavatar"]; ?>" disabled>
                    </label>
				</div>
                

				<div class="form-group">
                 <label class="label-input" for="">
                        <i class="fas fa-phone icon-modify"></i>
                        <input type="number" placeholder="Telefone" name="cell" class="form-control" value="<?php echo $_SESSION["cell"]; ?>" disabled>
                    </label>
				</div>
                
     
                </form>
            </div>
        </div>
    </div>

</body>
</html>