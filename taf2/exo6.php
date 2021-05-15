<?php

$a=rand(-20,20);
$b=rand(-20,20);
$c=rand(-20,20);

echo "Soit l'equation suivante: <br>";
echo "{$a}x2+{$b}x+{$c}=0 <br><br>";

$delta=$b*$b-(4*$a*$c);
if($delta<0){
    echo "L'equation n'admet pas de solution.";
} elseif ($delta==0){
    $x=-$b/2*$a;
    echo "Cette équation admet une racine double dont la solution est: {$x}";
}else{
    $x1=-($b-sqrt($delta))/(2*$a);
    $x2=-($b+sqrt($delta))/(2*$a);
    echo "Cette équation admet 2 solutions égale à : {$x1}, {$x2}";
}
?>