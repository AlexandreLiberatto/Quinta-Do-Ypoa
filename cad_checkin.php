<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
include "conexao.php";
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

 if (empty($nome) || empty($fone) || empty($rua) || empty($situacao)){
	
	echo'
<script>
alert("Ops..!\r Formuláio em branco?\r Favor preencher corretamente o formulário \r clique em Ok para voltar!");
history.go(-1);
</script>
';
	
	
} else {

if ($acompanhantes == ""){
	
	$acompanhantes = "Sem acompanhante..!";
};
$cadastro ="INSERT INTO cad_check_in (nome, fone, cpf, cep, rua, cidade, uf, data_in, data_out, acompanhantes, ap, situacao, pago, horas, dia, soma) VALUES               ('$nome','$fone','$cpf','$cep','$rua','$cidade','$uf','$data_in','$data_out','$acompanhantes','$ap','$situacao','$pago','$horas','$dia','$soma')";


mysqli_query($link, $cadastro) or die("Erro ao tentar cadastrar registro");

echo '<div align="left" class="w3-card-4 w3-white w3-center">
  <div class="w3-container w3-dark-gray">
    <h2>Cadastro Cliente</h2>
  </div>';
echo'<p class="w3-tiny"">Nome: '.$nome.'</p>';
echo'<p class="w3-tiny">Fone: '.$fone.'</p>';
echo'<p class="w3-tiny">CPF: '.$cpf.'</p>';
echo'<p class="w3-tiny">Apartamento: '.$ap.'</p>';
echo '<p>Cadastro '.$situacao.' efetuado com sucesso..!</p>';
echo '<p> Finalizar <br><a href="?link=ap.php">Clique aqui</a></p>';
echo '</div>';
}
//mysqli_close($link);

?>
