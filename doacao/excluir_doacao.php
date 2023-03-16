<?php
  $doacaoEscolhida = $_POST['iddoacao'];
  include_once "../conexao.php";

  session_start();

  $comandoSql="delete from tb_doacao where id_doacao='$doacaoEscolhida'";

  $resultado=mysqli_query($con,$comandoSql);

  if($resultado==true){
  	header("Location: ../usuario/doacoes_usuario.php?excluido=true");
  }else{
    echo "Erro na alteração";
  }
?>
