<?php
    // inicializa a sessão
  session_start();
 
  // destrói todas as variáveis de sessão
  $_SESSION = array();
 
  // destrói a sessão
  session_destroy();

  header("location: ../../pages/login/");
    ?>