<?php
include_once "../conexao.php";

session_start();

$usuario=$_POST["usuario"];
$senha=$_POST["senha"];

            $comandoSql = "select * from tb_ong where usuario_ong='$usuario'";

            $resultado=mysqli_query($con,$comandoSql);
            $ong=mysqli_fetch_array($resultado);

            $senha_cript=$ong["senha_ong"]; 
            $sen=base64_decode($senha_cript);
   
            $_SESSION['ong_logada'] = $ong;

            if($senha == $sen){
                $id=$ong["id_ong"];
                include "session_logged.php";
                logar();

            } else {
                $_SESSION["error"]=true;
                echo '<script> window.location.href = "login_usuario.php"; </script>';
            } 
?>