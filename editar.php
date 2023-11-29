<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
include_once "conexao.php";

$nome = isset($_POST['nome'])? $_POST['nome']:null;
$fone = isset($_POST['fone'])? $_POST['fone']:null;
$cidade = isset($_POST['cidade'])? $_POST['cidade']:null;
$uf = isset($_POST['uf'])? $_POST['uf']:null;
$rua = isset($_POST['rua'])? $_POST['rua']:null;
$cpf = isset($_POST['cpf'])? $_POST['cpf']:null;
$acompanhantes = isset($_POST['acompanhantes'])? $_POST['acompanhantes']:null;
$data_in = isset($_POST['data_in'])? $_POST['data_in']:null;
$data_out = isset($_POST['data_out'])? $_POST['data_out']:null;
$pago = isset($_POST['pago'])? $_POST['pago']:null;
$ap = isset($_POST['ap'])?$_POST['ap']:null;
$situacao = isset($_POST['situacao'])? $_POST['situacao']:null;
$cep = isset($_POST['cep'])? $_POST['cep']:null;
$horas = isset($_POST['hora'])? $_POST['hora']:null;
$dia = isset($_POST['dia'])? $_POST['dia']:null;
$soma = 1;
$id = isset($_POST['id'])? $_POST['id']:null;
//$result_usuario = "INSERT INTO cadastro (Id, nome, end, capa) VALUES ('$id','$nome','$end','$capa')";
$result_usuario =("UPDATE cad_check_in SET 
nome = '$nome', 
situacao = '$situacao', 
fone = '$fone', 
cidade = '$cidade', 
uf = '$uf', 
rua = '$rua', 
cpf = '$cpf', 
acompanhantes = '$acompanhantes', 
data_in = '$data_in', 
data_out = '$data_out', 
ap = '$ap', 
cep = '$cep', 
horas = '$horas', 
dia = '$dia'  
WHERE Id = $id");
mysqli_query($link,$result_usuario) or die("Erro ao tentar cadastrar registro");

 echo '<div class="w3-container w3-display-middle" style="margin-top:-150px; width:950px">
<div class="w3-card-4 w3-white">
<header class="w3-light-grey w3-center">

<h3>CHECK-IN REALIZADO COM SUCESSO...!</h3>

</header>
<div class="w3-container w3-center w3-white">';
echo '<p>Clique para voltar tela Check-In</p>';
echo '<p>Volta a cadastrar lista?<br><a href="?link=ap.php">Clique aqui</a></p>';
echo '</div>';
?>
</div>
</div>
<title>atualizar</title>
