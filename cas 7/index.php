<?php declare(strict_types=1) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php




// $string = 'profesorot saka da pie voda';
// // $trimmedString = trim($string, 'profesorot');

// // echo $trimmedString;

// $rest = substr('profesorot saka da pie voda',);





// $result = substr(strstr($string," "), 1);

// echo $result;


// $str = "profesorot saka da pie voda";
// $str2 = trim($str, "");
// echo $str2;




// $new_string2 = substr($str, 10);

// print $new_string2; // --Hello World!

// echo strlen($str);
// echo strlen($new_string2);


// 1. indexed 
// 2. associative
// 3. multi-dimensional


// $boi = array("blue", "red", 4, "green");
// $boi[4] = "violet";

// // echo $boi[4];

// var_dump($boi);
// echo "<hr>";
// print_r($boi);


// $boi_a = array("boja1" => "blue", "boja2" => "red", "broj1" => 4, "boja3" => "green");
// $boi_a["boja4"] = "violet";
// var_dump($boi_a);
// echo "<hr>";



// $boi = array("blue", "red", 4, "green");
// $boi[4] = "violet";
// $boi[] = "yellow";

// sort($boi); 

// $arr_c = count($boi);

// for ($x = 0; $x < $arr_c; $x++) {
//     echo $x;
//     echo $boi[$x];
// }

// foreach ($boi as $key => $value) {
//     echo $key . " - ";
//     echo $value."<br>";
    
// }


// $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

// asort($ceu);

// foreach ($ceu as $country => $capital) {
//     echo "The capital of " . $country . " is " . $capital . "<br>";
// }


$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$uniqueTemperatures = array_unique($temperatures);

print_r($uniqueTemperatures);











    
    








?>