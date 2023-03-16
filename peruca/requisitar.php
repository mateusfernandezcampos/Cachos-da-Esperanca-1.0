<?php
 //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
 //$con=mysqli_connect("localhost","root","","bd_projeto");

 include "../conexao.php";
 

  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
  session_start();
  
  $usu=$_SESSION["usu_logado"]["id_usuario"];
  $ong=$_POST["ongsel"];
  $desc=$_POST["descricao"];
  $hosp=$_POST["hospital"];
  $data=$_POST["data"];
  $status = 0; //Deixa a requisicao como requisitada.

  $imagem = time() . "_" . $_FILES['laudo']['name'];
  $destino = '../imagens/laudos/' . $imagem;
  move_uploaded_file($_FILES['laudo']['tmp_name'],$destino);

  /*3- criando o comando sql para insercao do registro */
  $comandoSql="insert into tb_peruca
  (cod_ong,cod_usuario,descricao_peruca,hospital_peruca,data_requisicao,status_peruca,laudo_peruca) 
  values 
  ('$ong','$usu','$desc','$hosp','$data','$status','$imagem')";

  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
    $_SESSION["requisitado"]=true;
  	header("Location: ../verperfilong.php?ongSel=".$ong);
  }else{
    echo "Erro no cadastro";
  }

 
?>