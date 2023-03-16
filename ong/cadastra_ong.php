<?php
 //1- realizando a conexao com o banco de dados(local,usuario,senha,nomeBanco)
 //$con=mysqli_connect("localhost","root","","bd_projeto");

 include "../conexao.php";
 

  /*2- pegando os dados vindos do formulario e armazenando em variaveis */
  session_start();
  
  $usu=$_SESSION["usuario"];
  $ema=$_SESSION["email"];
  $sen=$_SESSION["senha"];
  $nom=$_POST["nome"];
  $cnp=$_POST["cnpj"];
  $tel=$_POST["telefone"];
  $cep=$_POST["cep"];
  $fun=$_POST["fundacao"];
 
  $sen_cript = base64_encode($sen);

  $imagem = time() . "_" . $_FILES['avatar']['name'];
  $destino = '../imagens/perfil/' . $imagem;
  move_uploaded_file($_FILES['avatar']['tmp_name'],$destino);

  /*3- criando o comando sql para insercao do registro */
  $comandoSql="insert into tb_ong
  (usuario_ong,email_ong,senha_ong,nome_ong,cnpj_ong,telefone_ong,cep_ong,imagem_perfil_ong,fundacao_ong) 
  values 
  ('$usu','$ema','$sen_cript','$nom','$cnp','$tel','$cep','$imagem','$fun')";

  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
    $_SESSION["cadastrado"]=true;
  	header('Location: ../index.php');
  }else{
    echo "Erro no cadastro";
  }

 
?>