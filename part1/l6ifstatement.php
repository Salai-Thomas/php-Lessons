<?php
//if statement

$x = 10;
$y = 20;

if($x > $y){
    echo "your condition is yes";
}

if($x < $y){
    echo "your condition is yes";
}

echo "<br/>";

//if else

if($x > $y){
    echo "Yes x greater than y";
}else{
    echo "x less than y";
}

//27IF
//1/27/2023

echo '<br/>';

//short hand

if($x < $y) echo "Yes x greater than y"; else echo "x less than y";

if($x < $y) 
        echo "Yes x greater than y"; 
else    
        echo "x less than y";

        echo '<br/>';

$color = 'red';
$colorvalue = $color;   //assign by refrence

// echo $colorvalue;

echo '<br/>';

// if($colorvalue == "red"){
//     echo "My fav color is red";
// }else{
//     echo "I hate red color";
// }

if($colorvalue === "red"){
    echo "My fav color is " . $color;
}else{
    echo "I hate " . $color . " color";
}

echo "<br/>";
echo "<hr/>";

//Logical Operator
// && || !

$a = 100;
$b = 200;
$c = 300;

if($a < $b && $b > $c){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<br/>";

if($a < $b && $b < $c){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<br/>";

if($a < $b || $b > $c && $a < $c){
    echo "it is true";
}else{
    echo "it is false";
}

echo "<br/>";

//true          //false     false
if($a < $b || $b > $c && $a > $c){
    echo "it is true";
}else{
    echo "it is false";
}

//or ကြောင့် true ထွက်

echo "<br/>";

//true          //false     false   result = false
        //true              false
if(($a < $b || $b > $c) && $a > $c){
    echo "it is true";
}else{
    echo "it is false";
}
echo "<hr/>";

if(!($a < $b)){
    echo " It is true";
}else{
    echo  "it is false";
}

echo "<br/>";
//if elseif else( js မှာ elseif ခြားရေး php မှာကပ်ရေး)

if($b > $c){
    echo "It is true";
}elseif($b === 200){
    echo "it is equal";
}else{
    echo "it is false";
}

echo "<br/>";

if($b > $c) echo "It is true"; elseif($b === 200) echo "it is equal"; else echo "it is false";

echo "<br/>";
echo "<hr/>";

//switch(condition){
//     case label1:
//         code to execute;
//     break;
//     case label2:
//         code to be excuted;
//     ......
//     default:
//         code to be excuted;
// }

$phone = "samsung";

switch ($phone){
    case "sony":
        echo "i can't buy sonny phone";
        break;
    case "iphone":
        echo "i hate apple product";
        break;
    case "mi":
        echo "oki, i can buy";
        break;
    case "samsung":
        echo "my fav mobile product is samsung";
        break;
    default:
        echo "I love keypad";
}

// 2/3/2023
?>

