<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- ipadresss -->


<?php


echo "<h3>Data Types</h3>";
$string = "ova e integer";
echo "<h3>".$string. "</h3>";
var_dump($string);

$integer = 238;
echo "<h3>".$integer. "</h3>";
var_dump($integer);

$float = 238.158;
echo "<h3>".$float. "</h3>";
var_dump($float);

$t = true;
var_dump($t);
$n = false;

var_dump($n);

echo "t= ". $t; 
echo "<br> n= ". $n;



$array = array("kuce", "mace", "kokoska", 4, true);
echo "<br>";
echo "<br>";
var_dump($array);

echo "<h3>Object</h3>";


class Kniga {
    public $ime;
    public $avtor;

    public function __construct($ime, $avtor){
        $this->ime = $ime;
        $this->avtor = $avtor;
    }

    public function printajkniga(){
        return $this->ime. " e napisana od " . $this->avtor;
    }
}

$kniga1 = new Kniga("Zlostorstvo i kazna", "Tolstoj");
echo $kniga1 -> printajKniga();

$kniga2 = new Kniga("Alhemicarot", "Koejlo");
echo $kniga2 -> printajKniga();
// var_dump($kniga1);


// define (string $name , mixed $value [, bool $case_insensitive]);

//name
//value
//case_insensitive

echo "<br>";
echo "<br>";
define ("DB_USERNAME_CONFIG", "dimev");
echo DB_USERNAME_CONFIG;
echo "<br>";
echo "<br>";
function konstanti(){
    echo "Od funckijata ";
    echo DB_USERNAME_CONFIG;
}
konstanti(); //povukvanje funckija







?>