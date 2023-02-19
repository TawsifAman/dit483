/*
$family = "Name : Tawsif Aman,";
$age = "Age : 13,";
$country = "Country : Bangladesh,";
document.write($family);
document.write("\n");
document.write($age);
document.write("\n");
document.write($country);

document.write(" | ");
document.write("\n");
document.write("\n");

$num = 20;
$num = toString($num);
console.log(typeof($num));
console.log(Number(true));

document.write(" | ");
document.write("\n");
document.write("\n");

const person = {};
person.fname = "Tawsif";
person.lname = "Aman";
console.log(person);

document.write(" | ");
document.write("\n");
document.write("\n");

$num1 = 20;
$num2 = 30;
document.write("Num1 = " + $num1 + "\n Num2 =" + $num2);

$$text = prompt("Enter your name : ");
$$text2 = "Bangladesh";
$charecter = $$text2.charAt(2);
$uppercase = $$text2.toUpperCase();
$lowercase = $$text2.toLowerCase();
$len =  $$text.length;
document.write("Number of oparation is  " + $len + " | ");

document.write("\n");
document.write("\n");

document.write($charecter);

document.write(" | ");
document.write("\n");
document.write("\n");

document.write($uppercase);

document.write(" | ");
document.write("\n");
document.write("\n");

document.write($lowercase);


document.write(" | ");
document.write("\n");
document.write("\n");

$egg_price = 12.5;
$number_of_eggs = 12;
$totalcost = $egg_price * $number_of_eggs;
document.write("Total amount is " + $totalcost);


document.write(" | ");
document.write("\n");
document.write("\n");

$n = 4;
$r = 5 % 2;
console.log($r);

document.write(" | ");
document.write("\n");
document.write("\n");

$base = parseFloat(prompt("Enter base = "));
$height = parseFloat(prompt("Enter height = "));
$area = $base * $height;
document.write("Area = " + $area);

document.write(" | ");
document.write("\n");
document.write("\n");

$number1 = 5;
if($number1 % 2 == 0){
    document.write("Even");
}
if($number1 % 2 != 0){
    document.write("Odd");
}

document.write(" | ");
document.write("\n");
document.write("\n");

$n = prompt("Enter your number");
if ($n > 0) {
    document.write("Positive");
}
else if($n < 0){
    document.write("Negetive");
}
else{
    document.write("Zero");
}

document.write(" | ");
document.write("\n");
document.write("\n");

$mark = prompt("Enter your mark : ");
if($mark >= 80){
    document.write("A+");
}
else if($mark >= 70){
    document.write("A");
}
else if($mark >= 60){
    document.write("A-");
}
else if($mark >= 50){
    document.write("B");
}
else if($mark >= 40){
    document.write("C");
}
else if($mark >= 33){
    document.write("D");
}
else{
    document.write("F");
}

document.write(" | ");
document.write("\n");
document.write("\n");

$letter = prompt("Enter your letter : ");
$letter = $letter.toLowerCase();
switch($letter){
    case "a":
    case "e":
    case "i":
    case "o":
    case "u":
        document.write("Vowel");
    break;
    default :
        document.write("Consonent");
    break
}

document.write(" | ");
document.write("\n");
document.write("\n");

for($i = 10; $i >= 1; $i--){
    document.write(" " + $i);
}
document.write("<h1>End</h1>");

document.write(" | ");
document.write("\n");
document.write("\n");

$m = parseInt(prompt("Enter the starting number : "));
$n = parseInt(prompt("Enter the last number : "));
$sum = 0;
for($x = $m;$x <= $n;$x++){
    $sum += $x;
}
document.write($sum);

document.write(" | ");
document.write("\n");
document.write("\n");

$y = 1;
while($y <= 10){
    document.write(" " + $y);
    $y++;
}
document.write("<h1>End</h1>");

document.write(" | ");
document.write("\n");
document.write("\n");

$z = 1;
do{
    document.write(" " + $z);
    $z++;
}while($z <= 10)

document.write(" | ");
document.write("\n");
document.write("\n");

for($m = 1; $m <=100; $m++){
    if($m == 10){
        break;
    }
    document.write(" " + $m);
}

document.write(" | ");
document.write("\n");
document.write("\n");

function square($num){
    $result = $num * $num;
    document.write("Result = " + $result + "\n");
}
square(prompt("Enter your number : "));

document.write(" | ");
document.write("\n");
document.write("\n");

function cube(_$num){
    $result_ = _$num * _$num * _$num;
    document.write("Result = " + $result_ + "\n");
}
cube(prompt("Enter your number : "));

document.write(" | ");
document.write("\n");
document.write("\n");

function addition(_x, _y){
    $sum = _x + _y;
    document.write("Sum = " + $sum + "\n");
}
addition(4,6);

document.write(" | ");
document.write("\n");
document.write("\n");

$family = ["Sohel","Habiba","Tawsif","Tasnim"];
//document.write($family);
console.log($family.length);
console.log($family);
console.log($family[2]);
$family.push("Tania");
console.log($family);
document.write($family);

document.write(" | ");
document.write("\n");
document.write("\n");

$date = new Date();
console.log($date);
$year = $date.getFullYear();
console.log($year);
$month = $date.getMonth();
console.log($month);
$currentDate = $date.getDate();
console.log($currentDate);
$currentDay = $date.getDay();
console.log($currentDay);

document.write(" | ");
document.write("\n");
document.write("\n");

$numOfWin = 0;
$numOfLose = 0;
for($i = 1; $i <= 5; $i++){
$guessNumber = parseInt(prompt("Enter a number from 1 to 5"));
$randomNumber = Math.floor(Math.random()*5) + 1;
if($guessNumber == $randomNumber){
    console.log("You have won");
    $numOfWin++;
}else{
    console.log("You have lost. Random number was  "  +  $randomNumber);
    $numOfLose++;
}
}
document.write("Total Number of won = " + $numOfWin + "<br>");
document.write("Total Number of lose = " + $numOfLose + "<br>");
}

var series = "";
var n;
for(var i=1;i<10;i++){
    n = i*2;
    series = series + n + " ";
}
console.log("Series 1 =",series);


series = "1 ";
n = 1;
for(var i=1;i<10;i++){
    n = n+3;
    series = series + n + " ";
}
console.log("Series 2 =",series);


series = "";
for(var i=1;i<10;i++){
    n = i*i-1;
    series = series + n + " ";
}
console.log("Series 3 =",series);


series = "";
for(var i=1;i<10;i++){
    n = i;
    if( n%2==0){
        n = i*2;
    }
    series = series + n + " ";
}
console.log("Series 4 =",series);



series = "0 1 ";
n = 0;
var x = 0;
var y = 1;

for (var i = 1; i<10;i++){
    n = x+y;
    x = y;
    y = n;

    series = series + n + " ";
}
console.log("Series 5 =",series);

var series;
for (var i=1;i<=10;i++){
    series = i + " = ";
    for(var j=1;j<10;j++){
        series += i*j + " ";
    }
    console.log(series);
}
*/
var monthName = "January, 2023";
var days = 31;
var startingDay = 0;

console.log("\n\nCalendar Of",monthName,"\n");
console.log("sun   mon   tue   wed   thu   fri   sat");

for(var i=0;i<6;i++){
    var dayRow = "";
    for (var j=1;j<=7;j++){
        var currentDay = 7*i + j - startingDay;

        if(currentDay>days){
            break;
        } else if (currentDay < 1){
            currentDay = " ";
        }

        if(currentDay>9){
            dayRow += currentDay + "    ";
        }else{
            dayRow += currentDay + "     ";
        }
    
    }
    console.log(dayRow);
}
