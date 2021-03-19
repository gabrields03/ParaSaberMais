<!DOCTYPE html>
<html lang="port-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <link href="./css/style.css" rel="stylesheet">




    <title>PS+</title>
</head>
    <body>



      <nav class="navbar fixed-top  navbar-dark " style="background-color: #0d47a1;">



              <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">Matérias</a>
                <a href="#">Aulas ao vivo</a>
                <a href="#">Simulados</a>
                <a href="#">Correção de redação</a>
              </div>


              <span onclick="openNav()" style="padding: 10px; ">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAAVElEQVRoge3WwQ2AUAhEQb6xcK0ci5AEQmYq2L29CAAanMx8ukdUOJmZ3SMqXN0DqjgyzR0Rb/cIAKCIjJ9mTTQ6Mo2MB4BNZPw0a6LRkWlkPAB/fId1GBOc3m2dAAAAAElFTkSuQmCC">
              </span>


              <div id="main" style="padding: 0px;">
                <script>

                function openNav() {
                  document.getElementById("mySidenav").style.width = "250px";
                  document.getElementById("main").style.marginLeft = "250px";
                }

                /* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
                function closeNav() {
                  document.getElementById("mySidenav").style.width = "0";
                  document.getElementById("main").style.marginLeft = "0";
                }

                </script>
              </div>






            <div class="container" style="justify-content: center; padding: 0px;">
              <a class="" href="#" style="color: white;  text-decoration: none;" ><font face='anton'> <h1><b>Página Inicial</b><h1> </font>
              </a>
            </div>


            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
            width="50" height="50"
            viewBox="0 0 172 172"
            style="margin:10px; fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#ffffff"><path d="M86,21.5c-20.72315,0 -37.625,16.90185 -37.625,37.625c0,12.8706 6.55078,24.29248 16.46094,31.07422c-19.23242,8.18848 -32.58594,27.29492 -32.58594,49.55078h10.75c0,-23.99854 19.00146,-43 43,-43c23.99854,0 43,19.00146 43,43h10.75c0,-22.25586 -13.35352,-41.3623 -32.58594,-49.55078c9.91016,-6.78174 16.46094,-18.20361 16.46094,-31.07422c0,-20.72315 -16.90185,-37.625 -37.625,-37.625zM86,32.25c14.90723,0 26.875,11.96778 26.875,26.875c0,14.90723 -11.96777,26.875 -26.875,26.875c-14.90722,0 -26.875,-11.96777 -26.875,-26.875c0,-14.90722 11.96778,-26.875 26.875,-26.875z"></path></g></g></svg>


          </nav>
            <div class="slide" style="background-color: #bbdefb; padding: 500px">

            </div>

    </body>
</html>
