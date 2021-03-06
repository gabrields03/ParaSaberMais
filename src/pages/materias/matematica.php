<?php
session_start();

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
      <li class="cd-nav__item"><a href="../contato/index.php">Contato</a></li>
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
 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


 <!-- espa??o -->
 <div class="container px-4">
   <div class="row gx-5">
     <div class="col" style="height:50px;">
      <div class="bg-transparent"></div>
     </div>
   </div>
 </div>

 <div class="container px-4">
   <div class="row gx-5">
     <div class="col">
      <div class="p-3 border bg-light">



        <div id="areaprincipal">
               <div class="conteudo">
                 <br>
                   <h2 class="center"> Progress??o Aritm??tica</h2> <br>

                   <div>
                    <p class="justify"> A Progress??o Aritm??tica (P.A.) ?? uma sequ??ncia de n??meros onde a diferen??a entre dois termos consecutivos ?? sempre a mesma. Essa diferen??a constante ?? chamada de raz??o da P.A..
        <br>
        Sendo assim, a partir do segundo elemento da sequ??ncia, os n??meros que surgem s??o resultantes da soma da constante com o valor do elemento anterior.
        <br><br>
        Isso ?? o que a diferencia da progress??o geom??trica (P.G.), pois nesta, os n??meros s??o multiplicados pela raz??o, enquanto na progress??o aritm??tica, eles s??o somados.
        <br>
        As progress??es aritm??ticas podem apresentar um n??mero determinado de termos (P.A. finita) ou um n??mero infinito de termos (P.A. infinita).
        <br><br>
        Para indicar que uma sequ??ncia continua indefinidamente utilizamos retic??ncias, por exemplo:
        <br>
        a sequ??ncia (4, 7, 10, 13, 16, ...) ?? uma P.A. infinita. <br>
        a sequ??ncia (70, 60, 50, 40, 30, 20, 10) ?? uma P.A. finita. <br><br>
        Cada termo de uma P.A. ?? identificado pela posi????o que ocupa na sequ??ncia e para representar cada termo utilizamos uma letra (normalmente a letra a) seguida de um n??mero que indica sua posi????o na sequ??ncia.
        <br>
        Por exemplo, o termo a4 na P.A (2, 4, 6, 8, 10) ?? o n??mero 8, pois ?? o n??mero que ocupa a 4?? posi????o na sequ??ncia.
        <br><br>
        <h5>Classifica????o de uma P.A.</h5>
        De acordo com o valor da raz??o, as progress??es aritm??ticas s??o classificadas em:
        <br><br>
        Constante: quando a raz??o for igual a zero. Por exemplo: (4, 4, 4, 4, 4...), sendo r = 0. <br>
        Crescente: quando a raz??o for maior que zero. Por exemplo: (2, 4, 6, 8,10...), sendo r = 2. <br>
        Decrescente: quando a raz??o for menor que zero (15, 10, 5, 0, - 5,...), sendo r = - 5 <br>
        </p>
                   </div>
               </div>

            </div>




      </div>
     </div>
   </div>
 </div>




 <!-- espa??o -->
 <div class="container px-4">
   <div class="row gx-5">
     <div class="col" style="height:50px;">
      <div class="bg-transparent"></div>
     </div>
   </div>
 </div>



 <div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light">



       <div id="areaprincipal">
       <div class="conteudo">
         <br>
           <h2 class="center">Progress??o Geom??trica</h2> <br>

           <div>

            <p class="justify"> Progress??o Geom??trica (PG) corresponde a uma sequ??ncia num??rica cujo quociente (q) ou raz??o entre um n??mero e outro (exceto o primeiro) ?? sempre igual.
<br>
Em outras palavras, o n??mero multiplicado pela raz??o (q) estabelecida na sequ??ncia, corresponder?? ao pr??ximo n??mero, por exemplo:
<br>
PG: (2,4,8,16, 32, 64, 128, 256...)
<br><br>
No exemplo acima, podemos constatar que na raz??o ou quociente (q) da PG entre os n??meros, o n??mero que multiplicado pela raz??o (q) determina seu consecutivo, ?? o n??mero 2:
<br>
2 . 2 = 4 <br>
4 . 2 = 8 <br>
8 . 2 = 16 <br>
16 . 2 = 32 <br>
32 . 2 = 64 <br>
64 . 2 = 128 <br>
128 . 2 = 256 <br>
<br>
Vale lembrar que a raz??o de uma PG ?? sempre constante e pode ser qualquer n??mero racional (positivos, negativos, fra????es) exceto o n??mero zero (0).
<br><br>
<h5>Classifica????o das Progress??es Geom??tricas</h5>
De acordo com o valor da raz??o (q), podemos dividir as Progress??es Geom??tricas (PG) em 4 tipos:
<br><br>
 <h6>PG Crescente</h6>
Na PG crescente a raz??o ?? sempre positiva (q > 0) formada por n??meros crescentes, por exemplo:

<br>
(1, 3, 9, 27, 81, ...), onde q = 3 <br>
<br><br>
<h6>PG Decrescente</h6>
Na PG decrescente, a raz??o ?? sempre positiva (q > 0) e diferente de zero (0) formada por n??meros decrescentes.
<br>
Ou seja, os n??meros da sequ??ncia s??o sempre menores do que seus antecessores, por exemplo:
<br>
(-1, -3, -9, -27, -81, ...) onde q = 3
<br><br>
<h6>PG Oscilante</h6>
Na PG oscilante, a raz??o ?? negativa (q < 0), formada por n??meros negativos e positivos, por exemplo:
<br>
(3,-6,12,-24,48,-96,192,-384,768,...), onde q = -2
<br><br>
<h6>PG Constante</h6>
Na PG constante, a raz??o ?? sempre igual a 1 formada pelos mesmos n??meros a, por exemplo:
<br>
(5, 5, 5, 5, 5, 5, 5, ...) onde q = 1 <br>
 </p>
           </div>
       </div>

    </div>



     </div>
    </div>
  </div>
</div>


<!-- espa??o -->
<div class="container px-4">
  <div class="row gx-5">
    <div class="col" style="height:50px;">
     <div class="bg-transparent"></div>
    </div>
  </div>
</div>


 <?php
   require_once('../extensao/footer.php');
  ?>
    </div>