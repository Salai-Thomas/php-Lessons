<?php 

//Variables
$fullname = "U Kyaw Kyaw";
$job = "devloper";

echo $fullname;
print $job;
echo "$fullname";//result = U Kyaw Kyaw;
echo '$fullname';//result = $fullname

echo "<br/>";

echo "My name is         $fullname";//result =My name is U Kyaw Kyaw
//space တစ်ချက်ပဲသိ
echo "<br/>";

echo "My name is ${fullname}";//result =My name is U Kyaw Kyaw
echo "<br/>";

echo 'My name is ${fullname}';//result =My name is U Kyaw Kyaw
echo "<br/>";

echo "I am {$job}";//result = I am Developer
echo "<br/>";

echo 'He\'s my father, he is a $job';//result = He's my father, he is a $job
echo "<br/>";

echo "He's my father, he is a \$job";//result = He's my father, he is a $job
echo "<br/>";

echo "He\'s my father, he is a \{$job}";//result = He\'s my father, he is a \{devloper}
echo "<br/>";

echo "He's my father, he is a {\$job}";//result = He's my father, he is a {$job}
echo "<br/>";

echo "<hr/>";

//double quote က variable ကို translate လုပ်နိုင်ပြီး
//single quote က မလုပ်နိုင်


$gender = print "male";//result = male

// $nation = echo 'burma';//error

//print method ကို variable ထဲသိမ်းပြီး output တန်းထုတ်လို့ရပေမဲ့ echo တော့မရ

echo "<hr/>";

//Concat (.)
$firstname = 'Aung';
$lastname = 'Kyaw Kyaw';

echo $firstname;
echo $lastname;
echo "<br/>";

echo $firstname.$lastname;
echo "<br/>";

echo $firstname.' '.$lastname;

//Comments

#Single Line Comment

/* MultiLine Comment
 comment 1
 comment 2
 comment 3
 */


//1/20/2023
//DAY ONE


?>