<?php

    $a=rand(-15,20);
    $b=rand(-15,20);

echo "Affichage des nombres avant permutation: <br><br>";
echo "1er nombre = {$a} <br>";
echo "2éme nombre = {$b} <br><br>";

$p=$a;
$a=$b;
$b=$p;
echo "Affichage des nombres apres permutation: <br><br>";
echo "1er nombre = {$a} <br>";
echo "2éme nombre = {$b} <br>";
   
?>