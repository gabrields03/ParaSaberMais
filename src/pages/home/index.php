<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">

  <link rel="stylesheet" href="./style.css">



<script>
document.getElementsByTagName("html")[0].className += " js";
</script>

  <link rel="stylesheet" href="assets/css/style.css">
  <title>ParaSaberMais</title>

</head>

<body class="bg-gradient-to-tr from-blue-200 via-indigo-200 to-pink-200">

  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
      <a href="#0" class="cd-logo">Para Saber Mais</a>
    </div>
    
    <div class=" js-cd-search">
    </div>
  
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>
  
    <ul class="cd-nav__list js-cd-nav__list">
      <li class="cd-nav__item"><a href="#0">Ajuda</a></li>
      <li class="cd-nav__item"><a href="#0">Contato</a></li>
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0">
          <img src="../../pages/perfil/uploads/Foto_gabriel.jpg" alt="avatar">
          <span>Conta</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <li class="cd-nav__sub-item"><a href="#0">Editar Conta</a></li>
          <li class="cd-nav__sub-item"><a href="#0">Logout</a></li>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">
    <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list" style="position:fixed">
        <li class="cd-side__label"><span>Principal</span></li>
        <li class="cd-side__item cd-side__item--has-children cd-side__item--overview js-cd-item--has-children">
          <a href="#0">Plano de Estudo</a>    
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--comments js-cd-item--has-children">
          <a href="../materias/">Matérias</a>
          
          <ul class="cd-side__sub-list">
            <li class="cd-side__sub-item"><a href="#0">Matemática</a></li>
            <li class="cd-side__sub-item"><a href="#0">Português</a></li>
            <li class="cd-side__sub-item"><a href="#0">Biologia</a></li>
            <li class="cd-side__sub-item"><a href="#0">Geografia</a></li>
            <li class="cd-side__sub-item"><a href="#0">História</a></li>
            <li class="cd-side__sub-item"><a href="#0">Sociologia</a></li>
            <li class="cd-side__sub-item"><a href="#0">Química</a></li>
            <li class="cd-side__sub-item"><a href="#0">Física</a></li>
          </ul>
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--overview js-cd-item--has-children">
          <a href="../materias/">Simulados</a>    
        </li>


        <li class="cd-side__label"><span>Extra</span></li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks js-cd-item--has-children">
          <a href="../playground/">Playground</a>         
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--images js-cd-item--has-children">
          <a href="">Mural</a>
          
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">
          <a href="../biblioteca/">Biblioteca</a>
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--users js-cd-item--has-children">
          <a href="../contato/">Contato</a>
        </li>

      </ul>
    
   
    </nav>
  
    <div class="cd-content-wrapper">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
  
    <script>
      $(document).ready(function(){
        $('.slider').bxSlider();
      });
    </script>




<div class="container px-4 ">
  <div class="row gx-5">
    <div class="col">
     <div class="bg-transparent">
	 
<div class="flex flex-col w-screen h-screen overflow-auto text-gray-700 ">
	<div class="px-10 mt-6">
		<h1 class="text-2xl font-bold" style="margin-top: 60px;">Planejamento Semanal</h1>
	</div>
	<div class="flex flex-grow px-10 mt-4 space-x-6 overflow-auto">
		<div class="flex flex-col flex-shrink-0 w-72">

			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Segunda-Feira</span>
			</div>
      
			<div class="flex flex-col pb-2 overflow-auto">

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Dev</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Dev</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-yellow-500 bg-yellow-100 rounded-full">Copywriting</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>       

			</div>
		</div>



		<div class="flex flex-col flex-shrink-0 w-72">

			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Terça-feira</span>
			</div>

			<div class="flex flex-col pb-2 overflow-auto">
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Dev</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>

			</div>
		</div>

		<div class="flex flex-col flex-shrink-0 w-72">

			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Quarta-feira</span>
			</div>

			<div class="flex flex-col pb-2 overflow-auto">

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>

			</div>
		</div>


		<div class="flex flex-col flex-shrink-0 w-72">

			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Quinta-feira</span>
			</div>

			<div class="flex flex-col pb-2 overflow-auto">
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Dev</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-pink-500 bg-pink-100 rounded-full">Design</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>

			</div>
		</div>


		<div class="flex flex-col flex-shrink-0 w-72">
			<div class="flex items-center flex-shrink-0 h-10 px-2">
				<span class="block text-sm font-semibold">Sexta-feira</span>
			</div>

			<div class="flex flex-col pb-2 overflow-auto">
				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-yellow-500 bg-yellow-100 rounded-full">Copywriting</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-yellow-500 bg-yellow-100 rounded-full">Copywriting</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-yellow-500 bg-yellow-100 rounded-full">Copywriting</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>
				</div>

				<div class="relative flex flex-col items-start p-4 mt-3 bg-white rounded-lg cursor-pointer bg-opacity-90 group hover:bg-opacity-100" draggable="true">
					<span class="flex items-center h-6 px-3 text-xs font-semibold text-green-500 bg-green-100 rounded-full">Dev</span>
					<h4 class="mt-3 text-sm font-medium">This is the title of the card for the thing that needs to be done.</h4>					
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