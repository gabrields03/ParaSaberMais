<?php
session_start();

include"../../../_bd/Config.php";

if (isset($_FILES['foto-perfil']) && $_FILES['foto-perfil']['error'] == 0) {
  $imagem = array();
  $imagem = $_FILES['foto-perfil'];
  $url = save_image($imagem);
echo $url;
}

function save_image($file) {
  $imagem = array();
  $largura = 400; //largura desejada
  $altura = 400; // altura deseada
  $imagem['diretorio'] = 'fotos_perfil'; //diretório desejado
  $imagem['temp'] = $file['tmp_name'];
  $imagem['extensao'] = explode(".", $file['name']);
  $imagem['extensao'] = strtolower(end($imagem['extensao']));
  $imagem['name'] = $_FILES['foto-perfil']['name'];
  if ($imagem['extensao'] == 'jpg' || $imagem['extensao'] == 'jpeg' || $imagem['extensao'] == 'png') {

      list($larguraOriginal, $alturaOriginal) = getimagesize($imagem['temp']);


      $ratio = max($largura / $larguraOriginal, $altura / $alturaOriginal);
      $alturaOriginal = $altura / $ratio;
      $x = ($larguraOriginal - $largura / $ratio) / 2; //transforma a imagem em quadrada
      $larguraOriginal = $largura / $ratio;


      $imagem_final = imagecreatetruecolor($largura, $altura);

      if ($imagem['extensao'] == 'jpg' || $imagem['extensao'] == 'jpeg') {
          $imagem_original = imagecreatefromjpeg($imagem['temp']);
          imagecopyresampled($imagem_final, $imagem_original, 0, 0, $x, 0, $largura, $altura, $larguraOriginal, $alturaOriginal);
          imagejpeg($imagem_final, $imagem['diretorio'] . "/" . $imagem['name'], 90);
      } else if ($imagem['extensao'] == 'png') {
          $imagem_original = imagecreatefrompng($imagem['temp']);
          imagecopyresampled($imagem_final, $imagem_original, 0, 0, $x, 0, $largura, $altura, $larguraOriginal, $alturaOriginal);
          imagepng($imagem_final, $imagem['diretorio'] . "/" . $imagem['name']);
      }

     
  } else {
    echo'Formato não aceito, somente jpg, jpeg ou png';
  }
}

if (isset($_FILES['foto-perfil']) && $_FILES['foto-perfil']['error'] == 0) {
  $sql = "UPDATE usuarios SET img = '".$imagem['name']."' WHERE usuarios.login = '".$_SESSION['login']."'";
  $conn->query($sql);
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
<div class="w3-content" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding ">
  
    <!-- Left Column -->
    <div class="w3-third ">
    
      <div class="w3-white w3-text-grey w3-card-4 w3-margin-top">
        <div class="w3-display-container" >
          <img src="./fotos_perfil/<?php $sql = "SELECT `img` FROM `usuarios` WHERE login = '".$_SESSION['login']."'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              // Resultado
              while($row = $result->fetch_assoc()) {
              $_SESSION['img'] = $row["img"];
              }
            } echo $_SESSION["img"]; ?>" style="width: 100%;" alt="">
          <div class="w3-display-bottomleft w3-container w3-text-black">
	</form>
            <h2><?php echo $_SESSION["login"]; ?></h2>
            
          </div>
        </div>

        <form method="POST" enctype="multipart/form-data" autocomplete="off">
          <input type="file" name="foto-perfil"/>
          <input type="submit" value="Enviar">
        </form>
   
        <div class="w3-container">
          <p><i class="fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION["name"]; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>São João Nepomuceno</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION["email"]; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $_SESSION["cell"]; ?></p>

          <hr>

          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom w3-margin-top">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-user fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Página de Perfil</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Altere seus dados</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-user fa-fw w3-margin-right"></i>Nome de usuário</h6>
          <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form">
                    

                   
            
            <div class="form-group <?php echo (!empty($login_err)) ? 'has-error' : ''; ?>">
                     <label class="label-input" for="">
                            <i class="fas fa-user icon-modify"></i>
                            <input type="text" placeholder="Nome de usuário" name="login" class="form-control" value="<?php echo $_SESSION["login"]; ?>">
                        </label>
                        <span class="help-block"></span>
            </div>
            <h6 class="w3-text-teal"><i class="fa fa-user fa-fw w3-margin-right"></i>Nome completo</h6>

            <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                     <label class="label-input" for="">
                            <i class="fas fa-user icon-modify"></i>
                            <input type="text" placeholder="Nome de usuário" name="name" class="form-control" value="<?php echo $_SESSION["name"]; ?>">
                        </label>
                        <span class="help-block"></span>
            </div>
          <h6 class="w3-text-teal"><i class="fa fa-user fa-fw w3-margin-right"></i>Email</h6>

            <div class="form-group <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>">
                    <label class="label-input" for="">
                            <i class="far fa-envelope icon-modify"></i>
                            <input type="email" placeholder="Email"  name="email" class="form-control" value="<?php echo $_SESSION["email"]; ?>">
                        </label>
                     </div>
                     <h6 class="w3-text-teal"><i class="fa fa-user fa-fw w3-margin-right"></i>Número de telefone</h6>
            <div class="form-group <?php echo (!empty($cell_err)) ? 'has-error' : ''; ?>">
                     <label class="label-input" for="">
                            <i class="fas fa-phone icon-modify"></i>
                            <input type="number" placeholder="Telefone" name="cell" class="form-control" value="<?php echo $_SESSION["cell"]; ?>">
                        </label>
            </div>
            
    
                       <input type="submit" class="btn btn-primary" value="Editar">
                       
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