<?php
session_start();
?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/style.scss">
<script>
document.getElementsByTagName("html")[0].className += " js";
</script>

  <link rel="stylesheet" href="assets/css/style.css">
  <title>ParaSaberMais</title>

</head>

<body class="bg-gradient-to-tr from-blue-200 via-indigo-200 to-pink-200">

  <header class="cd-main-header js-cd-main-header" >
    <div class="cd-logo-wrapper">
      <a href="#0" class="cd-logo">Para Saber Mais</a>
    </div>
    
    <div class=" js-cd-search">
    </div>
  
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>
  
    <ul class="cd-nav__list js-cd-nav__list">
      <li class="cd-nav__item"><a href="../help/index.php">Ajuda</a></li>
      <li class="cd-nav__item"><a href="../contato/index.php">Contato</a></li>
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0">
          <img src="../perfil/uploads/<?php echo"$_SESSION[login].jpg "?>" onerror="this.src='../perfil/uploads/user.jpg'" alt="avatar">
          <span>Conta</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <li class="cd-nav__sub-item"><a href="../perfil/index.php">Editar Conta</a></li>
          <li class="cd-nav__sub-item"><a href="../../components/logout/index.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
  <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list" style="position: fixed;">
        <li class="cd-side__label"><span>Principal</span></li>
        <li class="cd-side__item cd-side__item--has-children" >
          <a href="#0">Plano de Estudos</a>
          
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--notifications cd-side__item--selected js-cd-item--has-children">
          
          <ul class="cd-side__sub-list">
          </ul>
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks js-cd-item--has-children">
          <a href="../materias/index.php">Matérias</a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="#0">Matemática</a></li>
            <li class="cd-side__sub-item"><a href="#0">Português</a></li>
            <li class="cd-side__sub-item"><a href="#0">Soc/Fil</a></li>
            <li class="cd-side__sub-item"><a href="#0">Biologia</a></li>
            <li class="cd-side__sub-item"><a href="#0">Química</a></li>
            <li class="cd-side__sub-item"><a href="#0">Física</a></li>
            <li class="cd-side__sub-item"><a href="#0">História</a></li>
            <li class="cd-side__sub-item"><a href="#0">Geografia</a></li>
          </ul>
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">
          <a href="../perfil/index.php">Perfil</a>
          
        </li>
    
  
        <li class="cd-side__label"><span>Extras</span></li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks js-cd-item--has-children">
          <a href="../biblioteca/index.php">Biblioteca</a>
          
        </li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks js-cd-item--has-children">
          <a href="../mural/index.php">Mural de recados</a>
          
        </li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks js-cd-item--has-children">
          <a href="#0">Playground</a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="../playground/memoria/index.php">Jogo da memória</a></li>
            <li class="cd-side__sub-item"><a href="../playground/breackout/index.php">Breackout</a></li>
          </ul>
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <a href="../contato/index.php">Fale Conosco</a>
          
        </li>
    
    
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">
      </ul>
    </nav>
  
    <div class="cd-content-wrapper">


	 
<div class="flex flex-col w-screen h-screen overflow-auto text-gray-700 ">
	<div class="px-10 mt-6">
  <div><?php echo"Seja bem-vindo $_SESSION[login]"?></div>
  <br>
		<h1 class="text-2xl font-bold">Planejamento Semanal - 05/04 até 09/04 -<a href="./index.php"> Semana anterior</a></h1>
	</div>
	<div class="flex flex-grow px-10 mt-4 space-x-6 overflow-auto" style="width: 80%;">
		<div class="flex flex-col flex-shrink-0 w-72" style="width: 230px;">

			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Segunda-Feira</span>
			</div>
      
			<div class="flex flex-col pb-2 overflow-auto" >
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-yellow-500 bg-yellow-100 rounded-full">História</span>
					<h4 class="mt-3 text-sm font-medium">Introdução ao período paleolítico.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-red-500 bg-red-100 rounded-full">Geografia</span>
					<h4 class="mt-3 text-sm font-medium">Introdução a globalização.</h4>
				</div>

			</div>
		</div>



		<div class="flex flex-col flex-shrink-0 w-72" style="width: 230px;">

			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Terça-feira</span>
			</div>

			<div class="flex flex-col pb-2 overflow-auto">

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Matemática</span>
					<h4 class="mt-3 text-sm font-medium">Início de estudos sobre probabilidade.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Física</span>
					<h4 class="mt-3 text-sm font-medium">Início de estudos sobre MRU.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Física</span>
					<h4 class="mt-3 text-sm font-medium">Estudo avançado sobre MRU.</h4>
				</div>

			</div>
		</div>



		<div class="flex flex-col flex-shrink-0 w-72" style="width: 230px;">

			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Quinta-feira</span>
			</div>

      <div class="flex flex-col pb-2 overflow-auto">
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-gray-500 bg-gray-100 rounded-full">Química</span>
					<h4 class="mt-3 text-sm font-medium">Introdução a tabela periódica.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-gray-500 bg-gray-100 rounded-full">Química</span>
					<h4 class="mt-3 text-sm font-medium">Continuação tabela periódica.</h4>
				</div>

			</div>
		
		</div>


		<div class="flex flex-col flex-shrink-0 w-72" style="width: 230px;">
			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Sexta-feira</span>
			</div>

			<div class="flex flex-col pb-2 overflow-auto">
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-blue-500 bg-blue-100 rounded-full">Biologia</span>
					<h4 class="mt-3 text-sm font-medium">Introdução a vírus.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-blue-500 bg-blue-100 rounded-full">Biologia</span>
					<h4 class="mt-3 text-sm font-medium">DNA e RNA viral.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-purple-500 bg-purple-100 rounded-full">Português</span>
					<h4 class="mt-3 text-sm font-medium">Figuras de linguagem.</h4>
				</div>

			</div>
		</div>

	</div>			
</div>

	 </div>
    </div>
  </div>
</div>

    </div> <!-- .content-wrapper -->

  </main> <!-- .cd-main-content -->
  <script src="assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="assets/js/menu-aim.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>