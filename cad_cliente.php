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
$cep = isset($_POST['cep'])? $_POST['cep']:null;
$ap = isset($_POST['ap'])? $_POST['ap']:null;
 if (empty($nome) || empty($fone) || empty($rua)){
	
	echo'
<script>
alert("Ops..!\r Formuláio em branco?\r Favor preencher corretamente o formulário \r clique em Ok para voltar!");
history.go(-1);
</script>
';
	
	
} else {

   $result_usuario = "INSERT INTO cad_cliente (nome, fone, cidade, uf, rua, cpf, cep) VALUES ('$nome', '$fone' ,'$cidade', '$uf', '$rua', '$cpf', '$cep')";
mysqli_query($link,$result_usuario) or die("Erro ao tentar cadastrar registro");




}

echo '<div class="w3-container" style="margin-top:95px; width:100%">
<div class="w3-card-4 w3-white ">
<header class="w3-light-grey w3-center">

<h3 style="margin-top:55px">CADASTRO DE CLIENTE</h3>
<p>
<a href="?cam=ap.php" class="w3-bar-item w3-button w3-right" style="margin-top:-44px; margin-right:15px"><i class="fa fa-times" aria-hidden="true"></i></a>
</p><br>
</header>
<div class="w3-container w3-center">';
echo'<p> Cliente '.$nome.' </p>';
echo'<p> Foi cadastrado com sucesso.</p> ';

echo '
<br><br><br>
</div>

<footer class="w3-light-grey w3-center">
<p>Clique para continuar no Check-IN</p>
 <a href="?link=form_in.php&ap='.$ap.'&cpf='.$cpf.'">Clique aqui</a>
 <br><br>
</footer>
</div>
';
echo '</div>';


?>
