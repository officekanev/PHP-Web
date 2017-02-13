<?php
//$input = trim(fgets(STDIN));
$input = trim('13.1, 50, 31.5, 50, 80, 50, -5, 18, 43');
$sides = explode(', ', $input);
for ($j = 0; $j < count($sides); $j+=3) {
    $x = $sides[$j];
    $y = $sides[$j + 1];
    $z = $sides[$j + 2];
    $result = isVolume($x, $y, $z);
    echo $result . "\n";
}

function isVolume($x, $y, $z){
   $x1 = 10; $x2 = 50;
   $y1 = 20; $y2 = 80;
   $z1 = 15; $z2 = 50;

   if($x >= $x1 && $x <= $x2){
       if($y >= $y1 && $y <= $y2){
           if($z >= $z1 && $z <= $z2){
                return 'inside';
           }
       }
   }
    return 'outside';
}

//function checkInsideVolume($array){
//    $sideX = floatval($array[0]);
//    $sideY = floatval($array[0]);
//    $sideZ = floatval($array[0]);
//    if($sideX > floatval(0) && $sideX <= floatval(50) && $sideY > floatval(0) && $sideY <= floatval(80)
//    && $sideZ > floatval(0) && $sideZ <= floatval(50) ){
//        return 'inside';
//    }
//    return 'outside';
//}

