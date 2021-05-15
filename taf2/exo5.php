<?php

$a=rand(-15,20);
$b=rand(-15,20);

echo "On donne l'équation suivante : <br>";
echo "{$a}x + {$b} = 0 <br><br>";

if($a==0){
	if ($b==0){
		echo "L'ensemble des solutions de l'équation {$a}x+({$b})=0 est l'ensemble des nombres réels.";
	}else{
		echo "<p>L'ensemble des solutions de l'équation {$a}x+({$b})=0 est l'ensemble vide.";
	}
}else{
	$x=-$b/$a;
	echo "La solution de l'equation {$a}x+({$b})=0 est: {$x}";
}   
?>