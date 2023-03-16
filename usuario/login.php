<?php
include_once "../conexao.php";

session_start();

$usuario=$_POST["usuario"];
$senha=$_POST["senha"];

            $comandoSql = "select * from tb_usuario where login_usuario='$usuario'";

            $resultado=mysqli_query($con,$comandoSql);
            $usuario=mysqli_fetch_array($resultado);

            $senha_cript=$usuario["senha_usuario"]; 
            $sen=base64_decode($senha_cript);
   
            $_SESSION['usu_logado'] = $usuario;

            if($senha == $sen){
                $id=$usuario["id_usuario"];
                include "session_logged.php";
                logar();

            } else {
                $_SESSION["error"]=true;
                echo '<script> window.location.href = "login_usuario.php"; </script>';
            } 
?>