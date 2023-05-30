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
<!-- <h1>hello world</h1> -->

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

// $time = date('H');
// $time = 19;
// echo $time;
// $today = date("l");

// ako e povekje od 18 do 6 sbaje, dobrovečer,
// ako e pomeđu 6 sabaje i 11 sabaje, dobro utro,
// ako e pomeđu 11 sabaje i 18 sabaje, dobarden

// if ($time > 18 && $time < 6) {
//     echo "Добра вечер";
// } elseif ($time >= 6 && $time < 11) {
//     echo "Добро утро";
// } else {
//     echo "Добар ден";
// }


// $currentTime = date('H');
// if ($currentTime <= 6 && $currentTime <= 20) {
//     <link href="/style.css">
// } else if ($currentTime <= 20 && $currentTime <= 6)



    // $hour = date('H');
    // if ($hour >= 6 && $hour < 20) {
    //     echo '<h1>hello light</h1>';
    //     echo '<link rel="stylesheet" type="text/css" href="light.css">';
        
    // } else {
    //     echo '<h1>hello dark</h1>';
    //     echo '<link rel="stylesheet" type="text/css" href="dark.css">';
    // }

        // $x=0;
        // while($x <= 10){
        //     echo $x."</br>";
        //     $x++;
        // }

        // echo "<hr>";
        // echo "do while example";
        // echo "<hr>";
        

        // do {
        //     echo $x."</br>";
        //     $x++;
        // } while ($x < 20);


        // for (initialisation ; condition ; incremenet ; )


        // for ($x=0; $x<10; $x++){
        //     if ($x==7){
        //         break;
        //     }
        //     echo $x."</br>";
        // }

        // foreach ($arr ad $val) {
        //     code logic
        // }

        // $brojki = array("eden","dva","tri","cetri","pet");

        // foreach ($brojki as $val) {
        //     echo $val."</br>";
        // }

        // i = 0;
        // for ($y=10;$y=0;i--;){
        //     echo $i.echo"<br>";
        // }


        // for ($i = 0; $i < 100; $i++) {
        //     if ($i % 2 == 0){
        //         echo $i . " is even." . "<br>";
        //     } else {
        //         echo $i . " is odd." . "<br>";
        //     }
        // }
        
        // function imetoNaFunkcijata(){
        //     codelogic
        // }

        

        
        


    // // while (uslov - true ) {
    // //     code logicfunction parni_broevi(){
    //         for ($i = 0; $i<100; $i+=2) {
    //             echo $i.'<br>';
    //         }
    //     }

    //     parni_broevi();


    //     function parni_broevi_u($until){
    //         for ($i = 0; $i<=$until; $i+=2) {
    //             echo $i.', ';
    //         }
    //     }

    //     parni_broevi_u(60);
    // // }



   
    function proizvodnabroevi($broj1, $broj2) {
        $proizvod = $broj1 + $broj2;
        echo $proizvod;
    }
    
    proizvodnabroevi(5, 7);
    
    





?>