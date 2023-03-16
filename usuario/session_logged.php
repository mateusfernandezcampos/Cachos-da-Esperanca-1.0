<?php
      session_start();

      $logged = False;

      $_SESSION['logged'] = $_SESSION['logged'] ?? False;

      function logar(){
        $_SESSION['logged'] = True;

        if($_SESSION['logged'] == True){
          header('Location: ../index.php');
      }
    }
?>