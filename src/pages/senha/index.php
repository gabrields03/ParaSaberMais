<?php
session_start();
// importação do arquivo config.php
require_once "../../../_bd/Config.php";

$password_err         = "";
$confirm_password_err = "";


// testa se o método utilizado foi o POST
if($_SERVER["REQUEST_METHOD"] == "POST"){

// validação da senha
if(empty(trim($_POST["password"]))) { 
    $password_err = "Por favor entre com a senha.";
 } elseif(strlen($_POST["password"]) < 4){
    $password_err = "A senha deve conter ao menos 4 caracteres.";
 } else{
    $password = trim($_POST["password"]);
}
  
// Confirmação da senha
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor confirme a senha.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "As senhas digitadas são diferentes.";
        }
    }

     // checa erros de entrada antes de inserir no bd
     if(empty($password_err) && empty($confirm_password_err)){
      
      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      $sql = "UPDATE usuarios SET password = '$hashed_password' WHERE usuarios.login = '".$_SESSION['login']."'";
  
      if ($conn->query($sql) === TRUE) {
        header("location: ../inicial/index.php");
    } else {
        echo "Algo de errado ocorreu. Tente novamente";
    }
  
      }
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
    <link rel="stylesheet" href="../login//style.css" />
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
                    <i class="fas fa-lock"></i>
                    <input name="password" type="password" placeholder="Senha" />
                </div>
                <span class="msg-err" class="help-block"><?php echo $password_err; ?></span>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input name="confirm_password" type="password" placeholder="Confirmar senha" />
                </div>
                <span class="msg-err" class="help-block"><?php echo $confirm_password_err; ?></span>
                <span class="msg-err" class="help-block"><?php echo $erro; ?></span>

            <input type="submit" value="Cadastre-se" class="btn solid" />
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
          </div>
          <img src="../../../img/register.svg" class="image" alt="" />
        </div>

      </div>
    </div>
    
      
  </body>
</html>


