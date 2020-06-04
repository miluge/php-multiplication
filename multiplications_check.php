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

	

  <form method = "post" action = "multiplications_check.php">
  Cocher les tables que vous voulez consulter :  <br><br>
  	<label for=table1 name="table1"> table du 1</label>
   <input type="checkbox" name="table[]" value="1" /><br>
   <label for=table2 name="table2"> table du 2</label>
   <input type="checkbox" name="table[]" value="2" /><br>
   <label for=table3 name="table3"> table du 3</label>
   <input type="checkbox" name="table[]" value="3" /><br>
   <label for=table4 name="table4"> table du 4</label>
   <input type="checkbox" name="table[]" value="4" /><br>
   <label for=table5 name="table5"> table du 5</label>
   <input type="checkbox" name="table[]" value="5" /><br>
   <label for=table6 name="table6"> table du 6</label>
   <input type="checkbox" name="table[]" value="6" /><br>
   <label for=table7 name="table7"> table du 7</label>
   <input type="checkbox" name="table[]" value="7" /><br>
   <label for=table8 name="table8"> table du 8</label>
   <input type="checkbox" name="table[]" value="8" /><br>
   <label for=table9 name="table9"> table du 9</label>
   <input type="checkbox" name="table[]" value="9" /><br>
   <label for=table10 name="table10"> table du 10</label>
   <input type="checkbox" name="table[]" value="10" /><br><br>
   <input type="submit" value="valider" />
   <br><br>
</form>
  </body>

<?php
foreach($_POST['table'] as $valeur){
for ($j=1; $j <= 10; $j++) {
if ($j == 10){

echo $valeur. 'x' .$j. '=' .$j * $valeur.'<br><br>';
} else {
echo $valeur. 'x' .$j. '=' .$j * $valeur.'<br>';
}

}
} 

 ?>
  </html>













