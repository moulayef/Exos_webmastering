<?php
$nbre1=rand(-15,20);
$nbre2=rand(-15,20);

$min=null;
$max=null;
  if($nbre1<$nbre2){
    $min=$nbre1;
    $max=$nbre2;
  }

  if($nbre2<=$nbre1){
    $min=$nbre2;
    $max=$nbre1;
  }


  echo "l'ordre croissant est {$min}, {$max} <br>";
  echo "l'ordre decroissant est {$max}, {$min}";  
?>