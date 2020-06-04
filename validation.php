<?php
$score = 0;
for ($i=0; $i < 5; $i++) { 
	if(isset($_POST['resultat'.$i])) {
	if ($_POST['resultat'.$i] == $_POST['vrai_resultat'.$i]){
		$score++;
	  echo "bonne réponse !!!<br>";
	} 
	else {
	  echo "Vous n'avez pas la bonne réponse ... le bon résultat est  ".$_POST['vrai_resultat' .$i]."<br>";
	}
    }
}

echo "<br>";
echo "Vous avez obtenu un score de " .$score;

