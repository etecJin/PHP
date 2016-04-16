<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
?>
<?php

//CONEXAO AO SERVIDOR
$conexao=mysql_connect("localhost",//Nome do servidor
    "root",//Login
    "root");//Senha
if($conexao != false)
{
 //echo "CONEXAO OK";
}
else
{
 echo "FALHA AO CONECTAR";
 exit; // TERMINA O PROGRAMA
}
 
$banco_de_dados=mysql_select_db("agenda");


//CONEXAO AO BANDO DE DADOS
if($banco_de_dados)
{
  //echo "CONECTADO AO BANCO DE DADOS";
}
else
{
  echo "FALHA AO CONECTAR AO BANCO DE DADOS";
  exit;
}
  
  
  
  

