<!DOCTYPE html>
<html>
<title>Controle</title>
<meta charSet="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style> a{text-decoration: none;} </style>
<body class="w3-responsive">
<!-- Sidebar -->

<div class=" w3-container w3-sidebar w3-bar-block w3-top w3-text-white" style="width:17%; background-color:#000">
  
  <a href="http://pousada.rf.gd/acess.php?link=ap.php"><img src="https://static.wixstatic.com/media/b87f83_9f4625b043a944daaf5fddefc7d73d0e~mv2.png/v1/fill/w_80,h_80,al_c,q_85,enc_auto/logo-pousada-quinta-do-ypua.png" width="90" class="w3-center" style="margin-left:100px; margin-top:15px"> </a>
  
  
  <h3 class="w3-bar-item w3-center w3-responsive">Menu</h3>
 <a href="?link=check_in.php&in=Check_In" class="w3-bar-item w3-button"><i class="fa fa-inbox fa-2x" aria-hidden="true"></i>&nbsp; Check-in </a>
<hr>
<a href="?link=check_out.php&in=Check_Out" class="w3-bar-item w3-button"><i class="fa fa-cubes fa-2x" aria-hidden="true"></i>&nbsp; Check-out </a>
<hr>
<a href="?link=reservas.php&in=Reservado" class="w3-bar-item w3-button"><i class="fa fa-calendar-check-o fa-2x" aria-hidden="true"></i>&nbsp; Reservas </a>
<hr>
<a href="?link=list_hospedes.php" class="w3-bar-item w3-button"><i class="fa fa-id-badge fa-2x" aria-hidden="true"></i>&nbsp; Hóspedes </a>
<hr>
<a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i>&nbsp; Sair </a>
<hr>
</div>

<!-- Page Content -->
<div style="margin-left:17%">

<div class="w3-container w3-light-grey w3-top w3-small">
  <h3> Pousada Quinta do Ypuã </h3>
  <p><br></p>
  </div>
<div class="w3-container" style="margin-top:95px;width:100%">

<?php
 require "conexao.php";
 $res = 0;
$ins = 0;
$inv = 0;
 $x = "";
 $sql = mysqli_query($link, "SELECT * FROM cad_check_in WHERE ap LIKE '%$x'") or die( 
  mysqli_error($link) //caso haja um erro na consulta 
);
while ($users = mysqli_fetch_array($sql)){
     
     $inv = $users['soma'];
	 
}
 
 $resultadoin = mysqli_query($link, "SELECT sum($inv) FROM cad_check_in WHERE situacao LIKE 'Check-In'");
     $chin = mysqli_num_rows($resultadoin);
       while($ckin = mysqli_fetch_array($resultadoin)){
     
	 $ins = $ckin['sum('.$inv.')'];
}

$resultado = mysqli_query($link, "SELECT sum($inv) FROM cad_check_in WHERE situacao LIKE 'Reservado'");
     $linhas = mysqli_num_rows($resultado);
       while($linhas = mysqli_fetch_array($resultado)){
     
	 $res = $linhas['sum('.$inv.')'];
}
 
 
$cam=isset($_GET['link'])? $_GET['link']:null;

if($cam==""){
	$cam="login.php";
}

include $cam;

$qtos = 15-$ins-$res;
echo'
<br><div class="w3-top" style="margin-top:45px"><p><samp>
<span class="w3-border w3-round-large ">&nbsp; Total Quartos: 15 &nbsp;</span> &nbsp;<span class="w3-teal w3-round-large ">&nbsp; Disponível: '.$qtos.' &nbsp; </span>&nbsp; <span class="w3-red w3-round-large ">&nbsp; Ocupado: '.$ins.' &nbsp;</span>&nbsp; <span class="w3-orange w3-round-large ">&nbsp; Reservado: '.$res.' &nbsp;</span></samp></p>
</div>

';
?>
</div>
</div>
</body>
</html>