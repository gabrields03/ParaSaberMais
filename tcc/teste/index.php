<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


<!-- Navbar (sit on top) -->
<div class="w3-top" >
  <div class="w3-bar w3-card" id="myNavbar" style="background-color: #0d47a1;">
    <a href="#home" class="w3-bar-item " style="text-decoration: none;font-family:anton; color:WHITE">
    <img src="../img/logops+.png" alt="" width="40" height="40" class="d-inline-block align-top">
    <div style="margin-left:45px;margin-top:-35px;" >PARA SABER MAIS  </div>
    </a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small" >
      <a href="#about" class="w3-bar-item " style="text-decoration: none;color: WHITE;">ABOUT</a>
      <a href="#team" class="w3-bar-item "style="text-decoration: none;color: WHITE;"><i class="fa fa-user"></i> TEAM</a>


  <div class="w3-dropdown-hover" >
    <button class="" style="background-color:transparent; border:0px;"> <a href="#work" class="w3-bar-item "style="text-decoration: none; color:white"><i class="fa fa-th"></i> WORK</a> </button>
    <div class="w3-dropdown-content w3-bar-block"  style="background-color:#0d47a1;color:white;">
      <a href="#" class="w3-bar-item w3-button  w3-hover-blue">Link 1</a>
      <a href="#" class="w3-bar-item w3-button  w3-hover-blue">Link 2</a>
      <a href="#" class="w3-bar-item w3-button  w3-hover-blue">Link 3</a>
    </div>
  </div>
     
      <a href="#pricing" class="w3-bar-item "style="text-decoration: none;color: WHITE;"><i class="fa fa-usd"></i> PRICING</a>
      <a href="#contact" class="w3-bar-item "style="text-decoration: none;color: WHITE;"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" style="color: WHITE;" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16 w3-hover-blue">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-blue">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-blue">TEAM</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-blue">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-blue">PRICING</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-blue">CONTACT</a>
</nav>






<div class="slide" style="background-color: #0086f8;" id="home">

<div class="container px-4">
  <div class=""style="padding:30px;display: flex; padding-top:80px;">
    <div class="col"  >


       <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="max-width:500px;">
         <div class="carousel-inner" >
           <div class="carousel-item active">
             <img src="../img/titulo.png"  class="d-block w-100" alt="...">
           </div>
         </div>
       </div>


    </div>
    <div class="col"  >


   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="max-width:350px; border: 3px solid white">
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
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/pessoa1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/pessoa2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/pessoa7.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/pessoa8.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/pessoa6.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/pessoa3.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/pessoa5.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../img/pessoa4.png" class="d-block w-100" alt="...">
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
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE COMPANY</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Responsive</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
  </div>
</div>

<!-- TEACHER Section -->

  <div class="container px-4" >
            <div class="row gx-5">
              <div class="col">
               <div class="">
                 <img src="../img/professor.png" class="card-img-top" alt="..." >
               </div>
              </div>
            </div>
          </div>


<!-- Team Section -->
<div class="w3-container" style="padding:128px 16px" id="team">
  <h3 class="w3-center">THE TEAM</h3>
  <p class="w3-center w3-large">The ones who runs this company</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="../img/f1.jpeg" alt="" style="width:100%">
        <div class="w3-container">
          <h3>Machado de Alencar</h3>
          <p class="w3-opacity">CEO & Founder</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="../img/f3.jpeg" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>José de Assis</h3>
          <p class="w3-opacity">Art Director</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="../img/f2.jpeg" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>Cecília de Queiroz</h3>
          <p class="w3-opacity">Web Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="../img/f4.jpeg" alt="Dan" style=";width:100%">
        <div class="w3-container">
          <h3>Rachel Meireles</h3>
          <p class="w3-opacity">Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Work Section -->
<div class="w3-container" style="padding-bottom:128px " id="work">
  <h3 class="w3-center">OUR WORK</h3>
  <p class="w3-center w3-large">What we've done for people</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_mic.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_phone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_drone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_sound.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
    </div>
    <div class="w3-col l3 m6">
      <img src="/w3images/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
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

<!-- Skills Section -->
<div class="w3-container w3-padding-64" style="background-color:#bbdefb">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>

<!-- Pricing Section -->
<div class="w3-container w3-center" style="padding:128px 16px;background-color:#0d47a1;color:white" id="pricing">
  <h3>PRICING</h3>
  <p class="w3-large">Choose a pricing plan that fits your needs.</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-blue w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button  w3-padding-large w3-hover-blue" style="background-color:#0d47a1;color:white;">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-blue w3-xlarge w3-padding-48">Pro</li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey  w3-padding-24">
          <button class="w3-button  w3-padding-large w3-hover-blue " style="background-color:#0d47a1;color:white;">Sign Up</button>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-blue w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button  w3-padding-large w3-hover-blue" style="background-color:#0d47a1;color:white;">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container " style="padding-top:48px;padding-bottom:48px;background-color:#bbdefb;COLOR:#0d47a1" id="contact">
  <h3 class="w3-center"><font face='anton'>CONTATO</font></h3>
  <p class="w3-center w3-large"><font face='agency fb'>Nos envie uma mensagem para mais informações:</font></p>
  <div style="margin-top:48px;COLOR:#0d47a1">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i><font face='agency fb'>São João Nepomuceno/MG</font></p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> <font face='agency fb'>+55(32)3261-9999</font></p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> <font face='agency fb'>parasabermais@outlook.com.br </font></p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-hover-blue"  style="background-color:#0d47a1;color:white" type="submit">
          <i class="fa fa-paper-plane"></i> ENVIAR MENSAGEM
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
    <div style="text-align:center">
    <h3 class="w3-center"><font face='anton'>MAPA</font></h3>
    <p class="w3-center w3-large"><font face='agency fb'>Nossa localização no Google Maps:</font></p>
      <iframe class="w3-image " style="HEIGHT: 500PX;;margin-top:48px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10497.634617221393!2d-43.0107005580467!3d-21.52830138495572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb15620c7671afbb!2sCentro%20Integrado%20Sesi-Senai%20Robson%20Braga%20de%20Andrade!5e0!3m2!1spt-BR!2sbr!4v1616583373678!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-padding-64" style="background-color: #0086f8; color:white">
  <a href="#home" class="w3-button w3-white w3-hover-blue"><i class="fa fa-arrow-up w3-margin-right"></i>CIMA</a>

</footer>
<div class="slide" style="background-color: #0d47a1;color:white;">
  joão MAurício
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