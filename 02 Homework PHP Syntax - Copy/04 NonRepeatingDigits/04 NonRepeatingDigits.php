<?php
    $allNumbers = [160];
    for ($x = 0; $x < count($allNumbers); $x++) {
        $tempNumber = (int)$allNumbers[$x];
        if($tempNumber < 100){
            echo 'No';
            continue;
        }
        $newNumber = '';
        $break = true;
        $array = array();
        while ($break){
            for ($x = 1; $x <= 9; $x++) {
                if(!$break){
                    break;
                }
                for ($i = 0; $i <= 9; $i++) {
                    if(!$break){
                        break;
                    }
                    for ($j = 0; $j <= 9; $j++) {
                        if($x != $i && $i != $j & $x != $j){
                            $newNumber = $x.$i.$j;
                            $int = (int)$newNumber;
                            if($tempNumber <= $int){
                                $break = false;
                                break;
                            }
                            if(!in_array($int, $array)){
                                array_push($array, $int);
                            }
                            $newNumber = '';
                        }
                    }
                }
            }
        }
        echo join(', ', $array);
    }
?>