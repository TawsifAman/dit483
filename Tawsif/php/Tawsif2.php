<?php
function printn($counter, $end, $stepping = 5){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter += $stepping;
    printn($counter, $end, $stepping);
}
function isEven($n){
    if($n % 2 == 0){
        return true;
    }
    return false;
}
function serve($foodType, $numberofitems="1 cup"){
    echo "{$numberofitems} of {$foodType} has/have been served";
}
 function addition($x, $y){
    $z=$x+$y;
    echo $z;
}
addition(20, 30);
 echo "\n";

function subtruction($t, $v){
    $b=$t-$v;
    echo $b;
}
subtruction(40, 30);
echo "\n";

function multiplication($q, $e){
    $r=$q*$e;
    echo $r;
}
multiplication(5, 5);
echo "\n";

function division($h, $j){
    $g=$h/$j;
    echo $g;
}
division(12, 6);
echo "\n";
echo "________________________";
echo "\n";
function sum($start, $end){
    if($start > $end){
        return;
    }
    echo $start."\n";
    $start++;
    sum($start, $end);
}
sum(10, 20);
echo "________________________";
echo "\n";
echo "\n";
function factorial($n){
    if($n <= 1){
        return 1;
    }
    return $n *factorial($n - 1);
}
echo factorial(6);
echo "\n";
echo "________________________";
echo "\n";