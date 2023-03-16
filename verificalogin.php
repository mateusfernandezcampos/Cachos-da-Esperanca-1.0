<?php
    /* Esse código serve para redirecionar o usuário para a tela de doacao e também para a peruca, além de ativar o sistema de alerta de errro q está presente do verperfilong.php (tive q fazer desse jeito por causa do session_start() entrar em conflito com a sessão que já estaria iniciada via login do usuário, necessidade desse arquivo por lógica do php) */

      $ong = $_GET['ongSel'];
      session_start();
      if($_SESSION['logged'] != True){
        $_SESSION["erro"]=true; 
        header("Location: verperfilong.php?ongSel=".$ong);
    } else { 
      $_SESSION["erro"]=false; 
      header("Location: doacao/doacao.php?ongSel=".$ong);
    }
?>  