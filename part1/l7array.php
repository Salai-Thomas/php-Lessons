<?php

//Arrays
//(i)Indexx Array (Manual Array)
//(ii)Associative Array
//(iii) Multidimensionnal Array

$names = array("aung aung", "maung maung", "zaw zaw", "kyaw kyaw", "tun tun");
// echo $names;
echo "<br/>";
echo count($names);
// print $names;
echo "<br/>";
print_r($names,"false");    //ပိုပြီးရှင်းရှင်းလင်းလင်းဖော်ပြပေး

echo "<br/>";


$colors = ["red","green","blue","white","black","pink"];
// echo $colors;
echo "<br/>";
echo count($colors);
echo "<br/>";
echo "<pre>".print_r($colors,"true")."</pre>"; //ပိုပြီးရှင်းရှင်းလင်းလင်းဖော်ပြပေး
var_dump($colors);

$colors[6] = "grey";
$colors[7] = "stone";
$colors[8] = "skyblue";
$colors[0] = "violet";

echo "<pre>" . print_r($colors, "true") . "</pre>";
echo "My fav color is " . $colors[3];   //[]တစ်ခုလုံးကို echo နဲ့ထုတ်လို့မရပေမဲ့ ဆွဲထုတ်တဲ့ခါတော့ထုတ်လို့ရ
echo "<br/>";

//-----------------------------------------------------

//(ii) Associative Array

$news = array("phone"=>"this is post one","ptwo"=>"this is post two","pthree"=>"this is post three");
var_dump($news);
echo "<br/>";

$medias = [
    "phone" => "this is post one",
    "ptwo" => "this is post two",
    "pthree" => "this is post three"
];

var_dump($medias);  //[]တွေကို var_dump နဲ့ထုတ်ပါ
echo "<br/>";

$medias['pfour'] = "this is post four";
$medias['pfive'] = "this is post five";

echo "<pre>" . print_r($medias, "true") . "</pre>";
echo "i like this post, so post title is " . $medias["pthree"];

// 3AR
// 2/3/2023
?>