<?php
session_start();
// importação do arquivo config.php
require_once"../../../_bd/Config.php";

/*
verifica se o usuário está logado
*/
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: ../inicial/index.php");
  exit;
}

// cria e inicializa as variáveis com ""
$login = "";
$password = "";
$login_err = $password_err = "";
 
// testa se o método utilizado foi o POST
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // verifica se o login do Usuário está vazio
    if(empty(trim($_POST["login"]))){
        $login_err = "Por favor entre com o nome de usuário.";
    } else{
        $login = trim($_POST["login"]);
    }
 
    // verifica se a senha do usuário está vazia
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor entre com a senha.";
    } else{
        $password = trim($_POST["password"]);
    }
 
    // valida os dados so usuário
    if(empty($login_err) && empty($password_err)){

         // prepara a query de consulta
         $sql = "SELECT id, login, name, cell, email, password, dtRegistro FROM usuarios WHERE login = '".$_POST["login"]."'";

          // armazena a query
          $result = $conn->query($sql);
          // associa o array com fetch_assoc
          while ($row = $result->fetch_assoc()) {
            // verifica se o nome de usuário já existe
            if($login == $row["login"]){
 
              $hashed_password="$row[password]";
              if(password_verify($password, $hashed_password)){
              
               // armazena os dados nas variáveis de sessão.
               $_SESSION["loggedin"] = true;
               $_SESSION["id"] = $row["id"];
               $_SESSION["login"] = $row["login"];
               $_SESSION["name"] = $row["name"];
               $_SESSION["cell"] = $row["cell"];
               $_SESSION["email"] = $row["email"];
               $_SESSION["dtRegistro"] = $row["dtRegistro"];

               //redireciona para página inicial
               header("location: ../home/index.php");
              
              
              }else{
                 // informa que a senha não é válida
                 $password_err = "A senha digitada não é válida.";
              }

            }	else{
                // informa que o usuário não existe
                $login_err = "O usuário digitado não existe.";
            }
        }

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
      src="https://kit.fontawesome.com/64d58efce2.js"crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="./style.css" />
    <title>Página de Login</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="index.php" class="sign-in-form" method="POST">
            <h2 class="title">Login</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="login" type="text" placeholder="Nome de usuário" />
            </div>
            <span class="msg-err" class="help-block"><?php echo $login_err; ?></span>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Senha" />
            </div>
            <span class="msg-err" class="help-block"><?php echo $password_err; ?></span>
            <input type="submit" value="Entrar" class="btn solid" />
            <input type="reset" value="Limpar" class="btn solid" />
          </form>
        </div>
      </div>
      

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Novo por aqui ?</h3>
            <p>
              Cadastre-se em nossa plataforma para poder usufruir de todos os recursos!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              <a href="../cadastro/index.php">Cadastro</a>
            </button>
            <br><br>
            <button class="btn transparent" id="sign-up-btn">
               <a href="../index.php">Voltar</a>
            </button>
            
          </div>
          <img src="../../../img/log.svg" class="image" alt="" />
        </div>

      </div>
    </div>
  </body>
</html>