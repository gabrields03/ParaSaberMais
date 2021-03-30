 <form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="imagem"/>
	<br/>
    <input type="submit" value="Enviar" name="Enviar">
 </form>

<?php 

 if(isset($_POST['Enviar'])){

     $caminho = "fotosperfil/";
     $nome = $caminho.basename($_FILES['imagem']['name']);
     $ext = $caminho.".jpg";
     if(move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho.".jpg")){

        echo"deuboa";
 }

}

?>