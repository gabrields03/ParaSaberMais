<?php

// importação do arquivo config.php
require_once "../../../_bd/Config.php";

// criação das variáveis para controle de acesso
$login                = "";
$name                 = "";
$cell                 = "";
$email                = "";
$password             = "";
$confirm_password     = "";
$login_err            = "";
$name_err             = "";
$email_err            = "";
$password_err         = "";
$confirm_password_err = "";

// testa se o método utilizado foi o POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
  // verifica o login
    if(empty(trim($_POST["login"]))){
      $login_err = "Por favor entre com seu nome de usuário.";
    } else {
      // prepara query
      $sql = ("SELECT id FROM usuarios WHERE nome = ?");
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
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
                    <input name="cell" type="number" placeholder="Telefone" />
                </div>
                <span class="msg-err" class="help-block"><?php echo $cell_err; ?></span>

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