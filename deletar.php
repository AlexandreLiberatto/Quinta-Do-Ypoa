<?php
require("conexao.php");
$ida = isset($_GET['id'])? $_GET['id']:null;
 
        $sqlInsert = "DELETE FROM cad_check_in WHERE Id = '$ida'";   
        $deletaPost = mysqli_query($link,$sqlInsert);

echo'<div class="w3-panel w3-yellow" align="center">
  <script>
  alert("Reserva foi cancelada..!");
  window.location.href="?link=ap.php";
  </script>
</div> ';

?>
