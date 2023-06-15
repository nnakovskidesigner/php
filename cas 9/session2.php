<?php //declare(strict_types=1);
session_start();
// setcookie("ime_i_prezime", "Dime vakanski", time() + 60 * 60 * 24, "/", "", 0) ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>cas 10</h1>

<?php
if(isset($_COOKIE["ime_i_prezime"])) {
    //kolaceto e setirano
    echo "kolaceto e setirano";
    echo $_COOKIE["ime_i_prezime"];
    var_dump($_COOKIE);
} else {
    //kolaceto e nesetirano
    echo "kolaceto ne e setirano";
}



//SESSIONS

echo $_SESSION["ime"];
echo "<br>";
echo $_SESSION["Boja"];
// Session variables are defined





?>




    
