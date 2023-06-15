<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $omilena_boja = $_POST['omilena_boja'];

    $data = [
        'ime' => $ime,
        'prezime' => $prezime,
        'omilena_boja' => $omilena_boja
    ];

   
    setcookie('form_data', serialize($data), time() + (86400 * 30), '/');

    echo "tvoeto ime e $ime, tvoeto prezime e $prezime, i tvojata omilena boja e $omilena_boja i kolaceto e setirano na 30 dena";
} else {
    echo "kolaceto ne e setirano";
}






?>
