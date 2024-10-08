<?php
//criar as variáveis de acesso ao banco
$local = "localhost/";
$login= "root" 
$senha= ""
$banco= "teste";

$abrir_porta = mysli_connect($local,$login,$senha, $banco);
$query= "SELECT * FROM alunos";
$reposta = mysqli_query($abrir_porta, $query);
while($info_do_banco = mysqli_fetch_query($resposta))
echo "NOME": ","
?>

