<?php
session_start();
include ("./recaptchlib.php");
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
   <!-- Link Recaptcha -->
   <script src="https://www.google.com/recaptcha/api.js?hl=pt-BR"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css'>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="../../components/header/assets/css/style.css">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  
  <title>ParaSaberMais</title>
</head>
<body>
  <header class="cd-main-header js-cd-main-header">
  <div class="cd-logo-wrapper">
      <a href="../home/" class="cd-logo">Voltar</a>
    </div>
    
    <div class=" js-cd-search">
    </div>
  
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>
  
    <ul class="cd-nav__list js-cd-nav__list">
      <li class="cd-nav__item"><a href="../help/index.php">Ajuda</a></li>
      <li class="cd-nav__item"><a href="#">Contato</a></li>
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0">
          <img src="../../pages/perfil/uploads/<?php echo"$_SESSION[login].jpg "?>" onerror="this.src='../perfil/uploads/user.jpg'" alt="avatar">
          <span>Conta</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <li class="cd-nav__sub-item"><a href="../perfil/index.php">Editar Conta</a></li>
          <li class="cd-nav__sub-item"><a href="../../components/logout/index.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
    <div class="cd-content-wrapper">



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>ParaSaberMais</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'><link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../components/header/assets/css/style.css">

</head>
<body class="bg-gradient-to-tr from-blue-200 via-indigo-200 to-pink-200">

<div class="bg-gradient-to-tr from-blue-200 via-indigo-200 to-pink-200">
<div class="" id="main">


<div id="about">


<!-- Contact Section -->
<div class="w3-container " style="padding-top:48px;padding-bottom:48px;COLOR:#0d47a1" id="contact">
  <p class="w3-large"><font face='agency fb'>Entre em contato conosco para mais informações:</font></p>
  <div style="margin-top:48px;COLOR:#0d47a1">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right" style="padding-bottom:20px;"></i><font face='agency fb'>São João Nepomuceno/MG</font></p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right" style="padding-bottom:20px;"></i> <font face='agency fb'>+55(32)3261-9999</font></p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right" style="padding-bottom:20px;"> </i> <font face='agency fb'>parasabermais@outlook.com.br </font></p>
    <br>
    <form action="sendEmail.php" id="myForm" method="POST">
      <p><input class="w3-input w3-border" type="text" placeholder="Seu nome" required name="name" style="margin-bottom:20px;"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Seu email" required name="email" style="margin-bottom:20px;"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Assunto" required name="assunto" style="margin-bottom:20px;"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Mensagem" required name="body" style="margin-bottom:20px;"></p>
      <p>
        <button class="w3-button w3-hover-blue" onclick="sendEmail()" id="btn" value="Send An Email" style="background-color:#0d47a1;color:white" type="submit" disabled>
          <i class="fa fa-paper-plane"></i> ENVIAR MENSAGEM
        </button>
        <br><br><br>
        <div class="g-recaptcha" data-callback="recaptchaCallback" data-sitekey="6LdOYD4aAAAAADYcEi7WCrUjZ9jAbFEEkJ0LJv19"></div>
      </p>
    </form>
    <!-- Image of location/map -->
    <div style="text-align:center;margin-top: 60px;">
    <h3 class="w3-center"><font face='anton'>MAPA</font></h3>
    <p class="w3-center w3-large"><font face='agency fb'>Nossa localização no Google Maps:</font></p>
      <iframe class="w3-center " style="width:100%;HEIGHT: 500PX;margin-top:48px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10497.634617221393!2d-43.0107005580467!3d-21.52830138495572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb15620c7671afbb!2sCentro%20Integrado%20Sesi-Senai%20Robson%20Braga%20de%20Andrade!5e0!3m2!1spt-BR!2sbr!4v1616583373678!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
  </div>
</div>


 
</div>
</div>

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js'></script><script  src="../js/script.js"></script>
<!-- Incluindo JQuery -->
<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">

    // Função enviar email
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var assunto = $("#assunto");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       assunto: assunto.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Mensagem enviada com sucesso.");
                   }
                });
            }
        }
// Função para não ter valores vazios
        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }

// Função ReCaptcha
        function recaptchaCallback(){
    jQuery('#btn').prop('disabled', false);
  }

    </script>
</body>
</html>

</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
     
  <script src="../../components/header/assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="../../components/header/assets/js/menu-aim.js"></script>
  <script src="../../components/header/assets/js/main.js"></script>

  <!-- Configurando Recaptcha -->
<?php
  $secret = "";

  $response = null;
  $reCaptcha = new reCaptcha($secret);

  if(isset($_POST['g-recaptcha-response'])){
      $response = $reCaptcha->verifyResponse($_SERVER['REMOTE_ADDR'], $_POST['g-recaptcha-response']);
  }


?>
</body>
</html>
