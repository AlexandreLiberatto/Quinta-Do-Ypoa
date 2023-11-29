<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charSet="utf-8"/>
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="con_cep.js"></script>

<title>Cliente</title>
</head>
<body>
<?php
date_default_timezone_set('America/Sao_Paulo');
$horas = date("H:m");
$data = date('d/m/Y');
$ap = $_GET['ap'];
$cpfc = $_GET['cpf'];
?>

<div class="w3-container  w3-display-topmiddle" style="margin-top:95px; width:950px">
<div class="w3-card-4 w3-white">
<header class="w3-light-grey w3-center">

<h3>CADASTRO DE CLIENTE</h3>
<a href="?link=ap.php" class="w3-bar-item w3-button w3-right" style="margin-top:-44px; margin-right:15px"><i class="fa fa-times" aria-hidden="true"></i></a>
<br>
</header>
<div class="w3-container w3-white">
<form method="post" action="?link=cad_cliente.php">
<div class="w3-container w3-border w3-round-large">
<p>
<label> CPF </label>
<input name="cpf" class="w3-input w3-border w3-round-large" type="text"  id="cpf" size="11" maxlength="11" value="<?php echo $cpfc; ?>" style="width:138px;"/>
<span class="w3-third w3-xlarge w3-border w3-center w3-teal w3-round-large" style="margin-top:-45px; margin-left:350px"> Apartamento: <?php echo $ap;?> </span>
</p>
<p>
<div class="w3-small w3-text-red" id="cad_cliente" style="margin-top:-13px"><br></div>
</div>
</p>
<div class="w3-third" style="width:586px"> 
<div class="w3-container" >
<p>
<label> Nome do cliente </label>
<input name="nome" type="text" class="w3-input w3-border w3-round-large" id="nome"  />
</p>
</div>
</div>
<div class="w3-third">
<div class="w3-container">
<p>
<label> Fone </label>
<input name="fone" type="text" class="w3-input w3-border w3-round-large" id="fone"  />
</p>
</div>
</div>

<div class="w3-third" style="width:126px"> 
<div class="w3-container" >
<p>
<label>CEP </label>
<input name="cep" type="text" class="w3-input w3-border w3-round-large" id="cep" value="" onblur="pesquisacep(this.value);"  />
</p>
</div>
</div>

<div class="w3-third" style="width:308px">
<div class="w3-container">
<p>
<label> Endereço </label>
<input name="rua" type="text" class="w3-input w3-border w3-round-large" id="rua" size="60"/>
</p>
</div>
</div>
<div class="w3-third" style="width:156px">
<div class="w3-container">
<p>
<label> Cidade </label>
<input name="cidade" type="text" class="w3-input w3-border w3-round-large" id="cidade" />
</p>
</div>
</div>
<div class="w3-third">
<div class="w3-container">
<p>
<label> Estado </label>
<input  name="uf" type="text" class="w3-input w3-border w3-round-large w3-center" id="uf"  size="2" maxlength="2"  style="width:70px" />
</p>
</div>
</div>
<div class="w3-third">
<div class="w3-container">
<p>
<label> Acompanhantes </label>
<textarea name="acompanhantes" class="w3-input w3-border w3-round-large" id="acompanhantes"  cols="30" rows="7" disabled="disabled"></textarea>
</p>
</div>
</div>
<div class="w3-third">
<div class="w3-container">
<p>
<label> Data entrada / Horas</label>
<input name="data_in" type="text" class=" w3-input w3-border w3-round-large" id="data_in" value="<?php echo $data. ' '.$horas; ?>" style="width:170px"  disabled="disabled" />
</p>
</div>
</div>

<div class="w3-third" style="width:70px; margin-left:-90px" >
<div class="w3-container">
<p>
<label> Dias </label>
<input name="dia" type="text" class=" w3-input w3-border w3-round-large w3-center" id="dia" value="" size="2" maxlength="2"  onblur="pesquisadia(this.value);" placeholder="01" disabled="disabled"/>
</p>
</div>
</div>


<div class="w3-third">
<div class="w3-container">
<p>
<label> Data saída / Horas</label>
<input name="data_out" type="text" class="w3-input w3-border w3-round-large" id="data_out" style="width:170px" disabled="disabled"/>
</p>

</div>
</div>
<div class="w3-third">
<label> Opção </label>
<div class="w3-container w3-border w3-round-large" style="width:280px">

  <input class="w3-radio" type="radio" name="situacao" value="Reservado" disabled="disabled">
  <label>Reservar</label>
  <p>
  <input class="w3-radio w3-container" type="radio" name="situacao" value="Check-In" disabled="disabled">
  <label>Check-In</label></p>
</div>
</div>

<div class="w3-third">
<label > Situação do Pagamento </label>
<div class="w3-container w3-border w3-round-large" style="width:280px">

  <input class="w3-radio" type="radio" name="pago" value="Sim" disabled="disabled">
  <label>Sim esta pago</label>
  <p>
  <input class="w3-radio w3-border" type="radio" name="pago" value="Não" disabled="disabled">
  <label>Não esta pago</label></p>
  <input type="hidden" name="ap" id="ap" value="<?php echo $ap;?>"/>
  <input type="hidden" name="horas" id="horas" value="<?php echo $horas;?>" disabled="disabled"/>
</div>
</div>
</div>
 <br>
<footer class="w3-light-grey w3-center">
<br>
 <button class="w3-button w3-border w3-round-large">Cadastrar</button>
 <br><br />
</footer>
    </form>
    </div>
  </div>
</div>

</body>
</html>