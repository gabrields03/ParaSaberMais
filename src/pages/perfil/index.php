<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: ../login/index.php");
  exit;
}

include"../../../_bd/Config.php";

if (isset($_POST['send']) ) {


  //valida login
  if(empty(trim($_POST["login"]))){
      $login_err = "Por favor entre com o email.";
   } else{
    $_SESSION["login"] = trim($_POST["login"]);
  }


  //valida name
  if(empty(trim($_POST["name"]))){
      $name_err = "Por favor entre com o nome.";
   } else{
    $_SESSION["name"]  = trim($_POST["name"]);
  }

  //valida email
  if(empty(trim($_POST["email"]))){
    $email_err = "Por favor entre com o email.";
 } else{
  $_SESSION["email"] = trim($_POST["email"]);
}

  //valida cell
  if(empty(trim($_POST["cell"]))){
      $cell_err = "Por favor entre com o cell.";
   } else{
    $_SESSION["cell"] = trim($_POST["cell"]);
  }

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
  if(empty($login_err) && empty($name_err) && empty($cell_err)){

      $hashed_password = password_hash($password, PASSWORD_DEFAULT);
      // prepara a query de atualização
      $sql = "UPDATE usuarios SET login = '".$_POST["login"]."', name = '".$_POST["name"]."',cell = '".$_POST["cell"]."', email = '".$_POST["email"]."', password = '$hashed_password' WHERE id = '".$_SESSION["id"]."'";
      $conn->query($sql);
    
    $conn->close();
  }

}

//Adicionar foto de perfil
if (isset($_FILES['foto_perfil']) && $_FILES['foto_perfil']['error'] == 0) {
  $imagem = array();
  $imagem = $_FILES['foto_perfil'];
  $url = save_image($imagem);
}

function save_image($file) {
  $imagem = array();
  $largura = 400; //largura desejada
  $altura = 400; // altura deseada
  $imagem['diretorio'] = './uploads/'; //diretório desejado
  $imagem['temp'] = $file['tmp_name'];
  $imagem['extensao'] = explode(".", $file['name']);
  $imagem['extensao'] = strtolower(end($imagem['extensao']));
  $imagem['name'] = $_SESSION['login'] . '.' . $imagem['extensao'];
  if ($imagem['extensao'] == 'jpg'){

      list($larguraOriginal, $alturaOriginal) = getimagesize($imagem['temp']);


      $ratio = max($largura / $larguraOriginal, $altura / $alturaOriginal);
      $alturaOriginal = $altura / $ratio;
      $x = ($larguraOriginal - $largura / $ratio) / 2; //transforma a imagem em guadrada
      $larguraOriginal = $largura / $ratio;


      $imagem_final = imagecreatetruecolor($largura, $altura);

      $imagem_original = imagecreatefromjpeg($imagem['temp']);
      imagecopyresampled($imagem_final, $imagem_original, 0, 0, $x, 0, $largura, $altura, $larguraOriginal, $alturaOriginal);
      imagejpeg($imagem_final, $imagem['diretorio'] . "/" . $imagem['name'], 90);
      
      } else {
        echo "Formato inválido, aceitamos somente jpg";
      }
      return $imagem['diretorio'] . "/" . $imagem['name'];
  }

?>

<html>
<title>ParaSaberMais</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./style.css">
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content" style="max-width:1200px;">

  <!-- The Grid -->
  <div class="w3-row-padding ">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4 w3-margin-top">
        <div class="w3-display-container" >
          <img src="./uploads/<?php echo"$_SESSION[login].jpg "?>" onerror="this.src='./uploads/user.jpg'" style="width: 100%;" alt="">
          
          <div class="w3-display-bottomleft w3-container w3-text-black">
	</form>
            <h2><?php echo $_SESSION["login"]; ?></h2>
            
          </div>
        </div>

        <form method="POST" enctype="multipart/form-data" autocomplete="off">
          <input type="file" name="foto_perfil"/>
          <input type="submit" value="Enviar">
        </form>
   
        <div class="w3-container">
          <p><i class="fa fa-user fa-fw w3-margin-right w3-large" ></i><?php echo $_SESSION["name"]; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large"></i><?php echo $_SESSION["email"]; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large"></i><?php echo $_SESSION["cell"]; ?></p>

          <hr>

          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom w3-margin-top">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge"></i>Página de Perfil <a href="../home/index.php" style="color: #0d47a1;border-radius:15px">Voltar</a></h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Altere seus dados</b></h5>
          <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">
            
            <div class="form-group <?php echo (!empty($login_err)) ? 'has-error' : ''; ?>">
                <label class="label-input" for="">
                      <i class="fas fa-user icon-modify"></i>
                      <input type="text" placeholder="Nome de usuário" name="login" class="form-control" value="<?php echo $_SESSION["login"]; ?>" style="font-size: 15px;">
                  </label>
                  <span class="help-block"><?php echo $login_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                     <label class="label-input" for="">
                            <i class="fas fa-user icon-modify"></i>
                            <input type="text" placeholder="Nome de usuário" name="name" class="form-control" value="<?php echo $_SESSION["name"]; ?>" style="font-size: 15px;"> 
                      </label>
                        <span class="help-block"><?php echo $name_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                    <label class="label-input" for="">
                            <i class="far fa-envelope icon-modify"></i>
                            <input type="email" placeholder="Email"  name="email" class="form-control" value="<?php echo $_SESSION["email"]; ?>" style="font-size: 15px;">
                     </label>
                        <span class="help-block"><?php echo $email_err; ?></span>
             </div>
                     
            <div class="form-group <?php echo (!empty($cell_err)) ? 'has-error' : ''; ?>">
                     <label class="label-input" for="">
                            <i class="fas fa-phone icon-modify"></i>
                            <input type="number" placeholder="cell" name="cell" class="form-control" value="<?php echo $_SESSION["cell"]; ?>" style="font-size: 15px;">
                        </label>
                        <span class="help-block"><?php echo $cell_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                     <label class="label-input" for="">
                            <i class="fas fa-phone icon-modify"></i>
                            <input type="password" placeholder="Senha" name="password" class="form-control" style="font-size: 15px;">
                        </label>
            </div>

            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                     <label class="label-input" for="">
                            <i class="fas fa-phone icon-modify"></i>
                            <input type="password" placeholder="Confirme a Senha" name="confirm_password" class="form-control" style="font-size: 15px;">
                        </label>
            </div>
            
            
    
                       <input type="submit" class="btn btn-primary" name="send" value="Editar">
                       
                    </form>
          <hr>
        </div>
       

      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>
</body>
</html>