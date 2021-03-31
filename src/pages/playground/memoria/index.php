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
  <link rel="stylesheet" href="../../../components/header/assets/css/style.css">
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  
  <title>ParaSaberMais</title>
</head>
<body>
  <header class="cd-main-header js-cd-main-header">
  <div class="cd-logo-wrapper">
      <a href="../../home/" class="cd-logo">Voltar</a>
    </div>
    
    <div class=" js-cd-search">
    </div>
  
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>
  
    <ul class="cd-nav__list js-cd-nav__list">
      <li class="cd-nav__item"><a href="../../help/index.php">Ajuda</a></li>
      <li class="cd-nav__item"><a href="../../contato/index.php">Contato</a></li>
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="#0">
          <img src="../../perfil/uploads/<?php echo"$_SESSION[login].jpg "?>" onerror="this.src='../../perfil/uploads/user.jpg'" alt="avatar">
          <span>Conta</span>
        </a>
    
        <ul class="cd-nav__sub-list">
          <li class="cd-nav__sub-item"><a href="../../perfil/index.php">Editar Conta</a></li>
          <li class="cd-nav__sub-item"><a href="../../../components/logout/index.php">Logout</a></li>
        </ul>
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
    <div class="cd-content-wrapper">
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset = "utf-8">
        <title>Jogo da Memória JS</title>
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>            
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>        

        <form action="javascript:novoJogo()">
            <select id="nJogadores">
                <option value="" selected disabled hidden>Número de Jogadores</option>
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <select id="nTabuleiro">
                <option value="" selected disabled hidden>Tamanho do Tabuleiro</option>
                <option value="2">2</option>
                <option value="4">4</option>
                <option value="6">6</option>
            </select>
            <input id="btnNovo" type="submit" value="Novo Jogo">
        </form>

        <div class="mesa">
            <section id="espacoCartas" class="mt-3 mb-3">
                <img src="img/jogodamemoria.png" alt="Jogo da Memória">
                <h1>Preencha o formulário para jogar</h1>
            </section>
        </div>

        <div class="pontuacao" style="margin-top:100px">
            <section id="jogador1">
            </section>
            <section id="jogador2">
            </section>
        </div>

        <footer>
            <p>Todas as imagens foram retiradas do Google Imagens ||
            Desenvolvido por <a href="https://github.com/felipemarchi" target="_blank" class="link-padrao">Felipe Marchi</a></p>
        </footer>
            
        <script src="js/memoria.js"></script>
    </body>
</html>
    </div>