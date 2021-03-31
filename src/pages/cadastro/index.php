<?php
session_start();
// importação do arquivo config.php
require_once "../../../_bd/Config.php";

// criação das variáveis para controle de acesso
$login                = $_POST["login"];
$login_err            = "";
$name_err             = "";
$cell_err             = "";
$email_err            = "";

// testa se o método utilizado foi o POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
  // verifica o login
    if(empty(trim($_POST["login"]))){
      $login_err = "Por favor entre com seu nome de usuário.";
    } else {

      // prepara query
      $sql = "SELECT id, login FROM usuarios";
      // armazena a query
      $result = $conn->query($sql);
      // associa o array com fetch_assoc
      while ($row = $result->fetch_assoc()) {
        // verifica se o nome de usuário já existe
        if($login == $row["login"]){
          $login_err = "Nome de usuário indisponível. Tente novamente.";       
        }	
    } 
    $_SESSION["login"] = trim($_POST["login"]);
  }

    //valida nome completo
    if(empty(trim($_POST["name"]))){
      $name_err = "Por favor entre com o nome completo.";
    } else{
        $_SESSION["name"] = trim($_POST["name"]);
    }

    //valida o email$s
    if(empty(trim($_POST["email"]))){
      $email_err = "Por favor entre com o email.";
    } else{
      $_SESSION["email"] = trim($_POST["email"]);
    }

    //valida o telefone
    if(empty(trim($_POST["cell"]))){
      $cell_err = "Por favor entre com o telefone.";
    } else{
      $_SESSION["cell"] = trim($_POST["cell"]);
    }

    if(!empty($login_err & $email_err || $cell_err)){
      $login_err            = "";
      $name_err             = "";
      $cell_err             = "";
      $email_err            = "";

      $erro = "Preencha todos os campos!";

    }

    // checa erros de entrada antes de inserir no bd
    if(empty($login_err) && empty($name_err) && empty($cell_err) && empty($email_err)){
    
      header("location: ../senha/index.php");
  } else{
    echo"Algo deu errado, tente novamente";
  }

    //fecha conexão
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Página de Cadastro</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="index.php" method="POST">
            <h2 class="title">Cadastro</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input name = "login" type="text" placeholder="Nome de usuário" />
                </div>
                <span class="msg-err" class="help-block"><?php echo $login_err; ?></span>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input name="name" type="text" placeholder="Nome completo" />
                </div>
                <span class="msg-err" class="help-block"><?php echo $name_err; ?></span>

                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input name="email" type="email" placeholder="Email" />
                </div>
                <span class="msg-err" class="help-block"><?php echo $email_err; ?></span>

                <div class="input-field">
                    <i class="fas fa-phone"></i>
                    <input name="cell" type="tel" placeholder="Telefone" />
                </div>
                <span class="msg-err" class="help-block"><?php echo $cell_err; ?></span>

                <span class="msg-err" class="help-block"><?php echo $erro; ?></span>

            <input type="submit" value="Continuar" class="btn solid" />
            <input type="reset" value="Limpar" class="btn solid" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Já possui uma conta?</h3>
            <p>
              Entre em sua conta para poder usufruir de todos os recursos!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              <a href="../login/index.php">Login</a>
            </button>
            <br><br>
            <button class="btn transparent" id="sign-up-btn">
              <a href="../../index.php">Voltar</a>
            </button>
          </div>
          <img src="../../../img/register.svg" class="image" alt="" />
        </div>

      </div>
    </div>
    
      
  </body>
</html>


