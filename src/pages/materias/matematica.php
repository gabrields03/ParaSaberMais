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


 <!-- espaço -->
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
                   <h2 class="center"> Progressão Aritmética</h2> <br>

                   <div>
                    <p class="justify"> A Progressão Aritmética (P.A.) é uma sequência de números onde a diferença entre dois termos consecutivos é sempre a mesma. Essa diferença constante é chamada de razão da P.A..
        <br>
        Sendo assim, a partir do segundo elemento da sequência, os números que surgem são resultantes da soma da constante com o valor do elemento anterior.
        <br><br>
        Isso é o que a diferencia da progressão geométrica (P.G.), pois nesta, os números são multiplicados pela razão, enquanto na progressão aritmética, eles são somados.
        <br>
        As progressões aritméticas podem apresentar um número determinado de termos (P.A. finita) ou um número infinito de termos (P.A. infinita).
        <br><br>
        Para indicar que uma sequência continua indefinidamente utilizamos reticências, por exemplo:
        <br>
        a sequência (4, 7, 10, 13, 16, ...) é uma P.A. infinita. <br>
        a sequência (70, 60, 50, 40, 30, 20, 10) é uma P.A. finita. <br><br>
        Cada termo de uma P.A. é identificado pela posição que ocupa na sequência e para representar cada termo utilizamos uma letra (normalmente a letra a) seguida de um número que indica sua posição na sequência.
        <br>
        Por exemplo, o termo a4 na P.A (2, 4, 6, 8, 10) é o número 8, pois é o número que ocupa a 4ª posição na sequência.
        <br><br>
        <h5>Classificação de uma P.A.</h5>
        De acordo com o valor da razão, as progressões aritméticas são classificadas em:
        <br><br>
        Constante: quando a razão for igual a zero. Por exemplo: (4, 4, 4, 4, 4...), sendo r = 0. <br>
        Crescente: quando a razão for maior que zero. Por exemplo: (2, 4, 6, 8,10...), sendo r = 2. <br>
        Decrescente: quando a razão for menor que zero (15, 10, 5, 0, - 5,...), sendo r = - 5 <br>
        </p>
                   </div>
               </div>

            </div>




      </div>
     </div>
   </div>
 </div>




 <!-- espaço -->
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
           <h2 class="center">Progressão Geométrica</h2> <br>

           <div>

            <p class="justify"> Progressão Geométrica (PG) corresponde a uma sequência numérica cujo quociente (q) ou razão entre um número e outro (exceto o primeiro) é sempre igual.
<br>
Em outras palavras, o número multiplicado pela razão (q) estabelecida na sequência, corresponderá ao próximo número, por exemplo:
<br>
PG: (2,4,8,16, 32, 64, 128, 256...)
<br><br>
No exemplo acima, podemos constatar que na razão ou quociente (q) da PG entre os números, o número que multiplicado pela razão (q) determina seu consecutivo, é o número 2:
<br>
2 . 2 = 4 <br>
4 . 2 = 8 <br>
8 . 2 = 16 <br>
16 . 2 = 32 <br>
32 . 2 = 64 <br>
64 . 2 = 128 <br>
128 . 2 = 256 <br>
<br>
Vale lembrar que a razão de uma PG é sempre constante e pode ser qualquer número racional (positivos, negativos, frações) exceto o número zero (0).
<br><br>
<h5>Classificação das Progressões Geométricas</h5>
De acordo com o valor da razão (q), podemos dividir as Progressões Geométricas (PG) em 4 tipos:
<br><br>
 <h6>PG Crescente</h6>
Na PG crescente a razão é sempre positiva (q > 0) formada por números crescentes, por exemplo:

<br>
(1, 3, 9, 27, 81, ...), onde q = 3 <br>
<br><br>
<h6>PG Decrescente</h6>
Na PG decrescente, a razão é sempre positiva (q > 0) e diferente de zero (0) formada por números decrescentes.
<br>
Ou seja, os números da sequência são sempre menores do que seus antecessores, por exemplo:
<br>
(-1, -3, -9, -27, -81, ...) onde q = 3
<br><br>
<h6>PG Oscilante</h6>
Na PG oscilante, a razão é negativa (q < 0), formada por números negativos e positivos, por exemplo:
<br>
(3,-6,12,-24,48,-96,192,-384,768,...), onde q = -2
<br><br>
<h6>PG Constante</h6>
Na PG constante, a razão é sempre igual a 1 formada pelos mesmos números a, por exemplo:
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


<!-- espaço -->
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