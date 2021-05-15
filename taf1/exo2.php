<?php

$x1=rand(-15,20);
$x2=rand(-15,20);
$y1=rand(-15,20);
$y2=rand(-15,20);

function carre($nbre){
      return $nbre*$nbre;
}
function distance(int $x1, int $y1, int $x2, int $y2):float{
    return sqrt(carre($y2 - $y1) + carre($x2 - $x1));

}

echo "La distance entre le point A({$x1},{$y1}) et le point B({$x2},{$y2})
         est égale à: <br>".distance( $x1,  $y1,  $x2,  $y2);
?>