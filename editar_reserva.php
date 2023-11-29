<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
include_once "conexao.php";


$situacao = isset($_GET['situacao'])? $_GET['situacao']:null;
$id = isset($_GET['id'])? $_GET['id']:null;
//$result_usuario = "INSERT INTO cadastro (Id, nome, end, capa) VALUES ('$id','$nome','$end','$capa')";
$result_usuario =("UPDATE cad_check_in SET situacao = '$situacao' WHERE Id = $id");
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
