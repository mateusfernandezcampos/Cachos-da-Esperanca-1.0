<?php
 include "../conexao.php";

  /* pegando os dados vindos do formulario e armazenando em variaveis */
  session_start();
  
  $_SESSION["sexo"]=$_POST["sexo"];
  $usu=$_SESSION["usuario"];
  $ema=$_SESSION["email"];
  $sen=$_SESSION["senha"];
  $nom=$_POST["nome"];
  $rg=$_POST["rg"];
  $cpf=$_POST["cpf"];
  $tel=$_POST["telefone"];
  $cep=$_POST["cep"];
  $sex=$_POST["sexo"];

  $sen_cript = base64_encode($sen);
  
  /*3- criando o comando sql para insercao do registro */
  $comandoSql="insert into tb_usuario
  (login_usuario,email_usuario,senha_usuario,nome_usuario,rg_usuario,cpf_usuario,telefone_usuario,cep_usuario,sexo_usuario) 
  values 
  ('$usu','$ema','$sen_cript','$nom','$rg','$cpf','$tel','$cep','$sex')";

  /*4- executando o comando sql */
  $resultado=mysqli_query($con,$comandoSql);

  /*5- verificando se o comando sql foi executado */
  if($resultado==true){
    $_SESSION["cadastrado"]=true;
  	header('Location: ../index.php');
	
  }else{
    echo "Erro no cadastro";

  }

