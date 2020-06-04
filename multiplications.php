 <html>

  <head><title>Afficher le tableau multiplication</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>

<header>
  <?php
$pagetitle='Tutoriel Link';
include ("menu.php");
?> 
</header>

<body>
 
	<h1>Table de Multiplication</h1>


  <?php

$table = 3 ;
$res = 'table de multiplication du '.$table.'<br />'.'<br />';
$i = 0;

while ($i < 11) {
$res .= $i.' * '.$table.' = '.$i*$table.'<br />';
$i++;
}
echo $res .'<br />';

  ?>

  <form method = "post" action = "multiplications.php">
  Choisir une table de multiplication entre 1 et 10:
  <select type="text" name="table"/>
  	<option> 1
	<option> 2
	<option> 3
	<option> 4
	<option> 5
	<option> 6
	<option> 7
	<option> 8
	<option> 9
	<option> 10
  <input type ="submit" value ="Valider"/>
  </select>
  </form>
  </body>



  
<?php

  if ($_POST['table']) {
    echo "<h2>";
    $t=$_POST['table'];

    for ($q = 1; $q < 11; $q++) {
  echo $q." x " .$t. " = ".$q*$t. "<br>";
  }
  }
 ?>
  </html>







