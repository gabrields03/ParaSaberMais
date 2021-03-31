<!DOCTYPE html>
<html>
<title>ParaSaberMais</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/mac.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
       
<!-- Navbar (sit on top) -->
<div class="w3-top" style="z-index:100" >
  <div class="w3-bar w3-card" id="myNavbar" style="background-color: #0d47a1;padding:10px;">
    <a href="#home" class="w3-bar-item " style="text-decoration: none;font-family:anton; color:WHITE">
    <img src="./img/logops+.png" alt="" width="40" height="40" class="d-inline-block align-top">
    <div style="margin-left:45px;margin-top:-35px;" >PARA SABER MAIS  </div>
    </a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small" >
      <a href="#about" class="w3-bar-item " style="text-decoration: none;color: WHITE;">SOBRE</a>
      <a href="#team" class="w3-bar-item "style="text-decoration: none;color: WHITE;"> TIME </a>


  <div class="w3-dropdown-hover" >
    <button class="" style="background-color:transparent; border:0px;"> <a href="#work" class="w3-bar-item "style="text-decoration: none; color:white"> TRABALHO</a> </button>
    <div class="w3-dropdown-content w3-bar-block"  style="background-color:#0d47a1;color:white;">
      <a href="#" class="w3-bar-item w3-button  w3-hover-blue">Link 1</a>
      <a href="#" class="w3-bar-item w3-button  w3-hover-blue">Link 2</a>
      <a href="#" class="w3-bar-item w3-button  w3-hover-blue">Link 3</a>
    </div>
  </div>
     
      <a href="#pricing" class="w3-bar-item "style="text-decoration: none;color: WHITE;"> OPÇÕES </a>
      <a href="./login/" class="w3-bar-item "style="text-decoration: none;color: WHITE;BACKGROUND-COLOR:#0086f8 ;border:2px solid #0086f8"> <i class="fa fa-user"></i> ENTRAR </a>
      <a href="./cadastro/" class="w3-bar-item "style="text-decoration: none;color: WHITE;border:2px solid #0086f8; margin-left:5px;"> CADASTRAR </a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" style="color: WHITE;" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none;z-index:101 " id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16 w3-hover-blue">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-blue">SOBRE</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-blue">TIME</a>


  <div class="w3-dropdown-click">
  <button onclick="myFunction()" class="w3-button w3-hover-blue">TRABALHO</button>
  <div id="Demo" class="w3-dropdown-content w3-bar-block w3-border">
    <a href="#" class="w3-bar-item w3-button">Link 1</a>
    <a href="#" class="w3-bar-item w3-button">Link 2</a>
    <a href="#" class="w3-bar-item w3-button">Link 3</a>
  </div>
</div>

<script>
function myFunction() {
  var x = document.getElementById("Demo");
  if (x.className.indexOf("w3-show") == -1) { 
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-blue">OPÇÕES</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-blue">CONTATO</a>
</nav>






<div class="slide" style="background-color: #0086f8; padding:30px" id="home">

<div class="container px-4">
  <div class=""style="padding:30px;display: flex; padding-top:80px;">
    <div class="col"  >


       <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="max-width:500px;">
         <div class="carousel-inner" >
           <div class="carousel-item active">
             <img src="./img/titulo.png"  class="d-block w-100" alt="...">
           </div>
         </div>
       </div>


    </div>
    <div class="col"  >


   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="max-width:350px; border: 3px solid white ;border-radius:40px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
  </div>
  <div class="carousel-inner" style="border-radius:40px;" >
    <div class="carousel-item active">
      <img src="./img/pessoa1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/pessoa2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/pessoa7.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/pessoa8.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/pessoa6.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/pessoa3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/pessoa5.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./img/pessoa4.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </div>
  </div>
</div>


</div>




<!-- About Section -->

<div class="container px-4" >

            <div class="row gx-5">
              <div class="col">
               <div class="">


               <div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center " style="font-family:anton;"><b> SOBRE A PARA SABER <span style="color: #0d47a1">MAIS</span></b></h3>
  <p class="w3-center w3-large">características da companhia:</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Planejamento</p>
      <p>Rotina organizada de estudos.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Credibilidade</p>
      <p>Referência em site de informações gratuitas.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Comprometimento</p>
      <p>Foco total no objetivo de sempre aprender mais.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Renovação</p>
      <p>Sempre se atualizando conforme as inovações.</p>
    </div>
  </div>
</div>




               </div>
              </div>
            </div>
          </div>



<!-- TEACHER Section -->

  <div class="container px-4" >
            <div class="row gx-5">
              <div class="col">
               <div class="">
                 <img src="./img/professor.png" class="card-img-top" alt="..." style="border-radius:40px;" >
               </div>
              </div>
            </div>
          </div>


<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center"><B>TIME DE FUNDADORES</B></h3>
  <p class="w3-center w3-large">O quarteto fantástico:</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card" style="border-radius:40px;">
        <img src="./img/f1.jpeg" alt="" style="width:100%;border-radius:40px;">
        <div class="w3-container w3-center">
          <h3>Machado de Alencar</h3>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card" style="border-radius:40px;">
        <img src="./img/f3.jpeg" alt="Jane" style="width:100%;border-radius:40px;">
        <div class="w3-container w3-center">
          <h3>José de Assis</h3>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card"  style="border-radius:40px;">
        <img src="./img/f2.jpeg" alt="Mike" style="width:100%;border-radius:40px;">
        <div class="w3-container w3-center">
          <h3>Cecília de Queiroz</h3>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card" style="border-radius:40px;">
        <img src="./img/f4.jpeg" alt="Dan" style="width:100%;border-radius:40px;">
        <div class="w3-container w3-center">
          <h3>Rachel Meireles</h3>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Work Section -->
<div class="w3-container" style="padding-bottom:128px;background-color:#0086f8;color:white " id="work">
<div style="margin:60px;">
  <h3 class="w3-center">Área de Trabalho</h3>
  <p class="w3-center w3-large">Recursos do site:</p>
</div>

  <div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <div class="">


     <div class="row row-cols-1 row-cols-md-2 g-4" style="color:black">
     <div class="col">
    <div class="card" style="border-radius:40px;">
      <img src="./img/casabanner.png" style="border-radius:40px;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title w3-center" style="color:black">Página Inicial</h5>
        <p class="card-text w3-center">Planejamento de cada semana conforme o modelo de curso selecionado.</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card"style="border-radius:40px;" >
      <img src="./img/materiasbanner.png" style="border-radius:40px;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title w3-center" style="color:black">Matérias</h5>
        <p class="card-text w3-center">Matérias disponíveis no site</p>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card" style="border-radius:40px;">
      <img src="./img/contatobanner.png" style="border-radius:40px;" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title w3-center">Contato</h5>
        <p class="card-text w3-center">Página com informações de contato direto com a Para Saber Mais.</p>
      </div>
    </div>
  </div>

  <div class="col" >
    <div class="card" style="border-radius:40px;">
      <img src="./img/bibliotecabanner.png" style="border-radius:40px;"class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title w3-center">Biblioteca</h5>
        <p class="card-text w3-center">Diversos livros para leitura disponíveis.</p>
      </div>
    </div>
  </div>

</div>



     </div>
    </div>
  </div>
</div>
  
</div>


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Footer -->

<div class="slide" style="background-color: #0d47a1;color:white;">
<div>
<p>Desenvolvido por <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-blue" style="color:white;text-decoration:none;">TECHUNIX</a></p>
 </div>



  </div>


<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>