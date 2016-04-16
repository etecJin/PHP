<?php//Exceção de erros
error_reporting(0);
ini_set(“display_errors”, 0 );
?>
<?php
require_once('conexao.php');


$query_select_contatos="SELECT * FROM tb_contatos";//Seleciona todos atributos de contatos (query = consulta)
$sql_select_contatos=mysql_query($query_select_contatos);//
if($sql_select_contatos == false)
	{
	echo "FALHA AO CONSULTAR A TABELA";
	exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>
<ul>
	<li><a href="inserir_contato.php">Inserir Contato</a></li>
</ul>
<table width="200" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td>Nome:</td>
    <td>Sobrenome:</td>
    <td>Email:</td>
    <td>Telefone:</td>
    <td>Celular:</td>
    <td colspan="2">Ações</td>
    </tr>
<?php  
if(mysql_num_rows($sql_select_contatos) > 0)//conta as linhas de registro
{
   while($array_select_contatos=mysql_fetch_array($sql_select_contatos))//monta um Vetor "Matriz"
	{
		$id_contato=$array_select_contatos["id_contatos"];
		$nome=$array_select_contatos["nome"];
		$sobrenome=utf8_encode($array_select_contatos["sobrenome"]);
		$email=$array_select_contatos["email"];
		$tel=$array_select_contatos["tel"];
		$cel=$array_select_contatos["cel"];		

 echo
 " <tr>
    <td>$nome</td>
    <td>$sobrenome</td>
    <td>$email</td>
    <td>$tel</td>
    <td>$cel</td>
	<td><a href=\"editar_contato.php?id_contato=$id_contato\">Editar</a></td>
	<td><a href=\"deletar_contato.php?id_contato=$id_contato\">Deletar</a></td>
  </tr>
  ";
	}
}
?>
</table>



</body>
</html>
