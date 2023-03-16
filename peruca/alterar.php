<?php
  include "../conexao.php";

  session_start();
  
  $id=$_POST["idperuca"];
  $desc=$_POST["descricao"];
  $hosp=$_POST["hospital"];

  $imagem = time() . "_" . $_FILES['laudo']['name'];
  $destino = '../imagens/laudos/' . $imagem;
  move_uploaded_file($_FILES['laudo']['tmp_name'],$destino);

  $comandoSql="update tb_peruca set
  descricao_peruca = '$desc',hospital_peruca = '$hosp',laudo_peruca = '$imagem'
  where id_peruca='$id'";

  $resultado=mysqli_query($con,$comandoSql);

  if($resultado==true){
  	header("Location: ../usuario/perucas_usuario.php?alterado=true");
  }else{
    echo "Erro na alteração";
  }
?>