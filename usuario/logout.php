<?php
  include_once "session_logged.php";

  session_destroy();

  $sessao = session_status();
        echo $sessao;

  header('Location: ../index.php')
?>