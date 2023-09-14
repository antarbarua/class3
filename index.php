<?php

echo "1st program <br> <hr>";

$exam = 100;

if($exam > 80){
    echo 'your result is good';
}else{

echo 'valo kore poro';
}
echo "<br>";
echo "<br>";

$exam = 70;

if ($exam < 35){
     echo 'khub valo';
}else{
    echo 'drop out';
}
echo "<br>";
echo "<br>";


echo "2nd program <br> <hr>";

$phone = 'dgfghtagh';

if (is_numeric($phone)){
    echo 'phn number';
}else{
    echo 'ki number dili eita';
}
echo "<br>";
echo "<br>";

$num = 526387;

if(is_numeric($num)){
     echo 'right number';
}else{
     echo 'wrong number';
}
echo "<br>";
echo "<br>";

echo "3rd program <br> <hr>";
$age = 20;

if ($age <= 21){
    echo 'oma biyer boyos hoye gece';
}else{
    echo 'r ektu boro how';
}
echo "<br>";
echo "<br>";

$age = 30;

if($age >= 31){
    echo 'apply korte parba';
}else{
    echo 'tmr boyos sesh';
}
echo "<br>";
echo "<br>";


echo "4th program <br> <hr>";

$a=10;
$b=20;
$c=25;
$d= 35;

if($c>$b && $c>$a && $c >$d){
    echo "a b , c & d  theke boro";
}
  elseif($b>$a && $b>$c && $b>$d){
   echo "b  a , c & d  theke boro ";
}
elseif($a>$b && $a>$c && $a>$d){
    echo "c a ,b & d thrke besi";
}
else{
        echo "d sobar theke boro";
}
echo "<br>";
echo "<br>";

echo "5th program <br> <hr>";

$sub= 400;

if($sub == 40){
    echo "correct";
}else{
    echo "invalid";
}



