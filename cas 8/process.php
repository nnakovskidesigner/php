<?php 

// $ime = $_POST["name"];
// $eposta = $_POST["email"];
// $poraka = $_POST["message"];


$ime = $_GET["name"];
$eposta = $_GET["email"];
$poraka = $_GET["message"];



echo "Zdravo ".$ime." tvojot email e ".$eposta. " i tvojata poraka e sledna: ".$poraka. " i taa ima ".strlen($poraka)." karakteri.";


// $savedtemp1 = $_GET["temp1"];
// $savedtemp2 = $_GET["temp2"];
// $savedtemp3 = $_GET["temp3"];
// $savedtemp4 = $_GET["temp4"];

// $tempprocesk = $savedtemp1 + $savedtemp2 + $savedtemp3 + $savedtemp4;
// $tempprocesk2 = $tempprocesk / 4;
// echo "prosekot na temperaturite e " . $tempprocesk2;



echo "<hr>";
$prvbrojsobiranjehtml = $_GET["prvbrojsobiranje"];
$vtorbrojsobiranjehtml = $_GET["vtorbrojsobiranje"];

$sobiranje = $prvbrojsobiranjehtml + $vtorbrojsobiranjehtml;
echo "broevite ". $prvbrojsobiranjehtml . " + " . $vtorbrojsobiranjehtml . " = " . $sobiranje;

// mnozenje

echo "<hr>";
$prvbrojmnozenjehtml = $_GET["prvbrojmnozenje"];
$vtorbrojmnozenjehtml = $_GET["vtorbrojmnozenje"];

$mnozenje = $prvbrojmnozenjehtml * $vtorbrojmnozenjehtml;
echo "broevite ". $prvbrojmnozenjehtml . " * " . $vtorbrojmnozenjehtml . " = " . $mnozenje;

//odzemanje

echo "<hr>";
$prvbrojodzemanjehtml = $_GET["prvbrojodzemanje"];
$vtorbrojodzemanjehtml = $_GET["vtorbrojodzemanje"];

$odzemanje = $prvbrojodzemanjehtml - $vtorbrojodzemanjehtml;
echo "broevite ". $prvbrojodzemanjehtml . " - " . $vtorbrojodzemanjehtml . " = " . $odzemanje;

//odzemanje
echo "<hr>";
$prvbrojdelenjehtml = $_GET["prvbrojdelenje"];
$vtorbrojdelenjehtml = $_GET["vtorbrojdelenje"];

$delenje = $prvbrojdelenjehtml / $vtorbrojdelenjehtml;
echo "broevite ". $prvbrojdelenjehtml . " / " . $vtorbrojdelenjehtml . " = " . $delenje;
















?>