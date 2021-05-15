<?php

$nbre1=rand(-15,20);
$nbre2=rand(-15,20);
$nbre3=rand(-15,20);


if($nbre1>$nbre2){
    $min=$nbre2;
    $max=$nbre1;
}else{
  $min=$nbre1;
  $max=$nbre2;
}
if($nbre3<$min){
    $moy=$min;
    $min=$nbre3;
}else{
    if($nbre3<$max){
      $moy=$nbre3;
    }else{
      $moy=$max;
      $max=$nbre3;
    }

}

echo "L'ordre croissant est {$min},{$moy},{$max} <br>";
echo "L'ordre décroissant est {$max},{$moy},{$min}";  
?>