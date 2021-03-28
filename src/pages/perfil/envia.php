<form method="POST" enctype="multipart/form-data" autocomplete="off">
    <input type="file" name="foto-perfil"/>
    <input type="submit" value="Enviar">
 </form>

<?php 
session_start();
  if (isset($_FILES['foto-perfil']) && $_FILES['foto-perfil']['error'] == 0) {
      $imagem = array();
      $imagem = $_FILES['foto-perfil'];
      $url = save_image($imagem);
	  echo $url;
  }

  function save_image($file) {
      $imagem = array();
      $largura = 140; //largura desejada
      $altura = 140; // altura deseada
      $imagem['diretorio'] = 'fotos_perfil'; //diretório desejado
      $imagem['temp'] = $file['tmp_name'];
      $imagem['extensao'] = explode(".", $file['name']);
      $imagem['extensao'] = strtolower(end($imagem['extensao']));
      $imagem['name'] = $_SESSION["login"] . '.' . $imagem['extensao'];
      if ($imagem['extensao'] == 'jpg' || $imagem['extensao'] == 'jpeg' || $imagem['extensao'] == 'png') {

          list($larguraOriginal, $alturaOriginal) = getimagesize($imagem['temp']);


          $ratio = max($largura / $larguraOriginal, $altura / $alturaOriginal);
          $alturaOriginal = $altura / $ratio;
          $x = ($larguraOriginal - $largura / $ratio) / 2; //transforma a imagem em guadrada
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
          return $imagem['diretorio'] . "/" . $imagem['name'];
      } else {
          return null;
      }
  }
?>
