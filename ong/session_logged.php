<?php
      session_start();

      $logged = False;

      $_SESSION['logged_ong'] = $_SESSION['logged_ong'] ?? False;

      function logar(){
        $_SESSION['logged_ong'] = True;

        if($_SESSION['logged_ong'] == True){
          header('Location: ../index.php');
      }
    }
?>