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




// $text = 'maja vozi velosiped';

// if (str_contains($text, 'velosiped')) {
//     echo "maja ima velosiped";
// } else {
//     echo 'elena ima velosiped';
// }

//ako brojot na karatkerti na imeto 'dime e pogolem od 5 karatker ispinrajtaj deka 
// imato a dime ima povekje od 5 karateri ako ne ima pomalku od 5 karakteri

// $ime = 'nikola';

// if (strlen($ime) > 5) {
//     echo 'Imeto '.$ime.' ima povekje od 5 karakteri';
// } else {
//     echo 'Imeto '.$ime.' dime ima pomalku ili tocno 5 karakteri';
// }
// $ime = '123456';

// if (strlen($ime) > 5) {
//     echo 'Imeto '.$ime.' ima povekje od 5 karakteri';
// } elseif (strlen($ime) == 5) {
//     echo 'Imeto '.$ime.' ima tocno 5 karakteri';
// } else {
//     echo 'Imeto '.$ime.' ima pomalku od 5 karakteri';
// }
//da se definira promenliva brzina na vozenje, moze da stavime brojka kolku
// brzo vozime ako vozime pomalku od 60 da se isprinta bravo vozete so dozvolan brzina 
// ako vozime pomegju 60 i 100, ve molime namaete ja vasta brzinam
// ako vozite nad 100 'life sentence'

// $brzina = 70;

// if ($brzina < 60) {
//     echo 'Bravo, vozite so dozvolena brizna';
// } elseif ($brzina > 60 && $brzina < 100) {
//     echo 'Ve molime namalete ja vastata brzina';
// } else {
//     echo 'Life sentence';
// }


// $i = 4;

// switch ($i) {
//     case 0:
//         echo "i equals 0";
//         break;
//     case 1:
//         echo "i equals 1";
//         break;
//     case 2:
//         echo "i equals 2";
//         break;
//     default:
//         echo "not defined";
// }

//da se napravi strikpta , koga ke e izvrsena denese thursday, 
// echo date('d')
// echo date('l')

// $today = date("l");

// switch ($today) {
//     case "Thursday":
//         echo "Доброутро, денес е четврток";
//         break;
//     case "Friday":
//         echo "Доброутро, денес е петок";
//         break;
//     case "Saturday":
//         echo "Доброутро, денес е сабота";
//         break;
//     case "Sunday":
//         echo "Доброутро, денес е сабота";
//         break;
//     case "Monday":
//         echo "Доброутро, денес е сабота";
//         break;
//     case "Tuesday":
//         echo "Доброутро, денес е сабота";
//         break;
//     case "Wednesday":
//         echo "Доброутро, денес е сабота";
//         break;
//     default:
//         echo "не дефинирано";
// }

$time = date('H');
echo $time;
$today = date("l");

// ako e povekje od 18 do 6 sbaje, dobrovečer,
// ako e pomeđu 6 sabaje i 11 sabaje, dobro utro,
// ako e pomeđu 11 sabaje i 18 sabaje, dobarden

if ($time > 18 || $time < 6) {
    echo "Добра вечер";
} elseif ($time >= 6 && $time < 11) {
    echo "Добро утро";
} else {
    echo "Добар ден";
}









?>