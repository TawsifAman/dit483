<?php
$x = 4;
$y = 5;
$z = $x + $y;
echo $z."\n";

$a = 6;
$b = 3;
$c = $a - $b;
echo $c."\n";

$d = 4;
$e = 4;
$t = $d * $e;
echo $t."\n";

$f = 4;
$g = 2;
$h = $f / $g;
echo $h."\n";

echo "\n";
echo "________________________";
echo "\n";

$year = 2009;
if($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}

echo "\n";
echo "________________________";
echo "\n";

$Sohel= 20000;
$Habiba=20000;
if($Sohel == $Habiba){
    echo "Sohel and Habiba has the same amount of money";
}
elseif($Sohel > $Habiba){
    echo "Sohel has more money than Habiba";
}
elseif($Sohel < $Habiba){
    echo "Habiba has more money than Sohel";
}

echo "\n";
echo "________________________";
echo "\n";

for ($i=10, $j=1; $i > 0; $i-=1, $j++) { 
    echo $i.":".$j;
    echo "\n";
 }

 echo "\n";
 echo "________________________";
 echo "\n";

$j=5;
for ($i=$j, $factorial=1; $i>1; $i--) { 
$factorial = $factorial * $i;
}
echo "The factorial of {$j} is {$factorial}.\n";

echo "________________________";
echo "\n";

$result=1;
$j=1;
for($n=1;$n<=12;$n++){
    $result *= $n;
    $j++;
    echo "The factorial of {$n} is {$result}. \n";
}

echo "________________________";
echo "\n";

for ($i=1; $i <= 10; $i++) { 
echo "\n";
    for ($j=0; $j < $i; $j++) { 
    echo "*";
}
}

echo "\n";
echo "________________________";
echo "\n";

$vo = 0;
$o = 1;
$n = 1;
for ($i=0; $i < 10; $i++) { 
echo $vo."\n";
$o = $n;
$n = $o + $vo;
$vo = $o;
}

echo "\n";
echo "________________________";
echo "\n";

$x= 35;
if($x % 2 == 0){
    echo "{$x} is an even number.";
}else{
    echo "{$x} is an odd number.";
}

echo "\n";
echo "________________________";
echo "\n";

$e=1;
$f=1;
$result=$e<=>$f;
if ($result == 1) {
    echo "{$e} is greater than {$f}";
}elseif ($result == 0) {
    echo "{$e} is equal to {$f}";
}else{
    echo "{$e} is smaller than {$f}";
}

echo "\n";
echo "________________________";
echo "\n";

$q=7;
$result = ($q % 2 == 0) ? "Even": "Odd";
echo $result;

echo "\n";
echo "________________________";
echo "\n";

$defult_lat=23.7;
$defult_lon=93.5;
$user_lat;
$lat = $user_lat ?? $defult_lat;
echo $lat;

echo "\n";
echo "________________________";
echo "\n";

$t=60;
$u=$t % 2;
switch(true){
    case ($u == 0 && $t>0):
        echo "$t is a positive even number.";
        break;    
    case ($u == 1 && $t>0):
        echo "$t is a positive odd number.";
        break;
    case ($u == 0 && $t<0):
            echo "$t is a negetive even number.";
        break;    
    case ($u == -1 && $t<0):
            echo "$t is a negetive odd number.";
        break;
}

echo "\n";
echo "________________________";
echo "\n";

$friends = [
    "Tawsif",
    "Saif",
    "Shan",
    "Ahnaf",
];
$friends[] = "Ifti";
$friends[] = "KM. Rafi";
$friends[] = "Lusun";
$friends[] = "Mahadi";
$friends[] = "Tahan";
$friends[] = "Nafis";
$friends[] = "Sifat";
$friends[] = "Kabbo";
$friends[] = "Fardin";
$friends[] = "Ishan";
$friends[] = "Bonanto";
$friends[] = "Toyon";
$friends[] = "Doha";
$friends[] = "Nabil";
$friends[] = "Durlov";
$friends[] = "Taz";
$friends[] = "Monon";
$friends[] = "Shafayet";
$friends[] = "Zillur";
$friends[] = "Alif";
$friends[] = "Tausif";
$friends[] = "Fahamed";
$friends[] = "Ayman";
$student = array_push($friends, "Isha");
$student = array_unshift($friends, "Tasnim");
$count = count($friends);
for ($i=0; $i < $count; $i++) { 
    echo $friends[$i]."\n";
}

echo "________________________";
echo "\n";

$foods = [
    'Vegetables' => 'Carrot, Tomato, Mint, Onion Leaf',
    'Fruits' => 'Orange Mango, Banana, Papaya, Coconut',
    'Drinks' => 'Milk, Water, Juice, Coffee',
];
foreach ($foods as $key => $value) {
    echo $key."=>".$value."\n \n";
}

echo "________________________";
echo "\n";

print_r($friends);

echo "\n";
echo "________________________";
echo "\n";

$cars = [
    array("Lamborgini",20,15),
    array("Ferrari",10,5),
    array("McLarence",10,3),
    array("BMW",20,20)
];
echo $cars[0][0]." : In Stock : ".$cars[0][1].", Sold : ".$cars[0][2]."\n \n";
echo $cars[1][0]." : In Stock : ".$cars[1][1].", Sold : ".$cars[1][2]."\n \n";
echo $cars[2][0]." : In Stock : ".$cars[2][1].", Sold : ".$cars[2][2]."\n \n";
echo $cars[3][0]." : In Stock : ".$cars[3][1].", Sold : ".$cars[3][2]."\n \n";
echo "________________________";
echo "\n";
$fruits = array('mango','banana','orange','dates','apple','plum',);
$newfruits = array('watermelon','coconut','graps','Sapatu');
sort($fruits);
print_r($someFruits);
print_r($fruits);

echo "\n";
echo "________________________";
echo "\n";

$person = ['Sohel','Habiba','Tawsif','Tasnim'];
function filterByT($name){
        return $name[0] == 'T';
}
$newperson = array_filter($person,'filterByT');
print_r($newperson);

echo "\n";
echo "________________________";
echo "\n";

$number = [1,2,3,4,5,6,7,8,9,10,11,12];
function square($n){
    printf("Square of %d is %d",$n ,$n * $n);
    echo "\n";
}
array_walk($number,'square');

echo "\n";
echo "________________________";
echo "\n";

$numbers = array(1,2,3,4,5,6);
function cube($n){
    printf("Cube of %d is %d",$n ,$n * $n * $n);
    echo "\n";
}
array_walk($numbers,'cube');

echo "\n";
echo "________________________";
echo "\n";

$number1 = [1,2,77,33,64,68,99,7,5,6,8];
$number2 = [1,7,8,99,45,34,77,56,22,2,5];

$fruits1 = ["a" => "Mango", "b" => "JackFruit", "c" => "Watermelon"];
$fruits2 = ["a" => "Mango", "b" => "Grapps", "c" => "Dates", "d" => "Orange"];
$common = array_intersect($number1 , $number2);
$commonf = array_intersect_assoc($fruits1 , $fruits2);
print_r($common);

echo "\n";
echo "________________________";
echo "\n";

print_r($commonf);

echo "\n";
echo "________________________";
echo "\n";

$diff = array_diff($number1, $number2);
print_r($diff);

echo "\n";
echo "________________________";
echo "\n";

$number3 = [1,2,3,4,5,6,7,8,9,10];
function sum($oldValue, $newValue){
    if($newValue % 2 == 1){
        return $oldValue+$newValue;
    }
    return $oldValue;
}
$sum = array_reduce($number3, "sum");
echo $sum;

echo "\n";
echo "________________________";
echo "\n";

$number4 = [1,2,3,4,5,6,7,8,9,10];
function sum1($oldValue1, $newValue1){
    if($newValue1 % 2 == 0){
        return $oldValue1+$newValue1;
    }
    return $oldValue1;
}
$sum1 = array_reduce($number4, "sum1");
echo $sum1;

echo "\n";
echo "________________________";
echo "\n";

$color = [122,343,65];
list($red, $green, $blue) = $color;
echo $blue;

echo "\n";
echo "________________________";
echo "\n";

$number5 = range(40,72);
$random = mt_rand(0,32);
$luck = $number5[$random];
if($luck % 2 ==0){
    echo "Head";
}else{
    echo "Tail";
}

echo "\n";
echo "________________________";
echo "\n";

$decimal = 17;
printf("The octal of %d is %o",65536,65536);

echo "\n";
echo "________________________";
echo "\n";

$somenumber = -13;
$dividenumber = $somenumber % 2;
switch (true) {
    case ($dividenumber == 0 && $somenumber > 0):
            echo "{$somenumber} is a positive even number.";
        break;
    case ($dividenumber == 0 && $somenumber < 0):
            echo "{$somenumber} is a negetive even number.";
        break;
    case ($dividenumber == 1 && $somenumber > 0):
            echo "{$somenumber} is a positive odd number.";
        break;
    case ($dividenumber == -1 && $somenumber < 0):
            echo "{$somenumber} is a negetive odd number.";
        break;
}

echo "\n";
echo "________________________";
echo "\n";

$tenery = 12;
$tenery_result = ($tenery % 2 ==0) ? "A" : (($tenery == 11) ? "B" : "C");
echo $tenery_result;

echo "\n";
echo "________________________";
echo "\n";

for ($i=1; $i <= 10; $i++) { 
    echo "\n";
    for($j = 0; $j < $i;$j++){
        echo "*";
    }
}

echo "\n";
echo "________________________";
echo "\n";

$i = 1;
while ($i <= 12) {
    echo $i."\n";
    $i++;
}

echo "\n";
echo "________________________";
echo "\n";

$a = 0;
do{
    $a++;
    echo $a."\n";
}while($a < 15);

echo "\n";
echo "________________________";
echo "\n";


for ($i=10, $j = 1; $i > 0 ; $i--, $j++) { 
     echo $i.":".$j;
     echo "\n";
}

echo "\n";
echo "________________________";
echo "\n";

$factorial_num = 5;
for ($i=$factorial_num, $factorial_num2 = 1; $i > 1; $i--) { 
    $factorial_num2 *= $i;    
}
echo "The Factorial of {$factorial_num} is {$factorial_num2}";

echo "\n";
echo "________________________";
echo "\n";

$factorial_result = 1;
for($n = 1; $n<=8; $n++){
    $factorial_result *= $n;
    echo "The Factorial of {$n} is {$factorial_result} \n";
}

echo "\n";
echo "________________________";
echo "\n";

$n2 = 2;
$n3 = 7;
$n_result = $n2<=>$n3;
if($n_result == 1){
    echo "$n2 is greater than $n3";
}elseif($n_result == 0){
    echo "$n2 is equal to $n3";
}else{
    echo "$n2 is smaller than $n3";
}

echo "\n";
echo "________________________";
echo "\n";

for($i = 0,$j = 0;$i<100;$i+=7,$j+=11){
    echo $i."\n";
    echo $j < 100 ? $j."\n":"";
}

echo "\n";
echo "________________________";
echo "\n";

