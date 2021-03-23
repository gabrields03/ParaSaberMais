<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #0d47a1;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body style="background-color:#bbdefb">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center"style=" color:white;">
  <!-- Avatar image in top left corner -->
  <img src="../img/logops+.png" style="width:60%;margin: 15px; color:white;">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-blue ">
    <i class="fa fa-home w3-xxlarge"></i>
      <H6><font face='agency fb'><p>CASA</p></font></H6>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-blue">
    <i class="fa fa-user w3-xxlarge"></i>
    <H6><font face='agency fb'><p>PERFIL</p></font></H6>
  </a>

  <div class="w3-dropdown-hover w3-hover-blue">
  <a href="" class="" style="text-decoration:none">

    <i class="fa fa-eye w3-xxlarge" style="color:white"></i>
    <H6><font face='agency fb'style="color:white"><p>MATÉRIAS</p></font></H6>
      <div class="w3-dropdown-content w3-bar-block ">
        <a href="#" class="w3-bar-item w3-button w3-hover-blue" style="background-color:#0086f8;color:white">MATEMÁTICA</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-blue" style="background-color:#0086f8;color:white">PORTUGUÊS</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-blue" style="background-color:#0086f8;color:white">BIOLOGIA</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-blue" style="background-color:#0086f8;color:white">HISTÓRIA</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-blue" style="background-color:#0086f8;color:white">GEOGRAFIA</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-blue" style="background-color:#0086f8;color:white">LITERATURA</a>
      </div>

        </a>
    </div>

    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-blue">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <H6><font face='agency fb'><p>CORREÇÃO DE REDAÇÃO</p></font></H6>
    </a>

    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-blue">
      <i class="fa fa-envelope w3-xxlarge"></i>
      <H6><font face='agency fb'><p>PROVAS E SIMULADOS</p></font></H6>
    </a>

  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-blue">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <H6><font face='agency fb'><p>CONTATO</p></font></H6>
  </a>

</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-opacity w3-hover-opacity-off w3-center w3-small" style="background-color:#0d47a1;color: white; ">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">CASA</a>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">PERFIL</a>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">MATÉRIAS</a>
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">CONTATO</a>
  </div>
</div>
