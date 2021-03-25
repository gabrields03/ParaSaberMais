<?php
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/estilo_mural.css">
</head>
<body>
	<div class="container">
<?php
session_start(); // Inicia a sessão

include("../../../_bd/Config.php");

$sql = "INSERT INTO `post`(`id_U`, `publicacao`) VALUES ('".$_SESSION['id']."', '".$_POST["publicacao"]."')";

if ($conn->query($sql) === TRUE) {
    header("location: ./index.php");
}

$conn->close();
?>
</div>
</body>
<html>