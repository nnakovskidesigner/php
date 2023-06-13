<?php
$maximumfilesize = 1000000;
if (!empty($_FILES['uploaded_file'])) {
    
    $path = "uploads/";
    $path = $path . basename($_FILES['uploaded_file']['name']);
    var_dump($_FILES);
    if ($_FILES['uploaded_file']['size'] > $maximumfilesize) {
        echo "vasiot file e pogolem od 1MB";
    } else {
        if (move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
            echo "The file " . basename($_FILES['uploaded_file']['name']) . " has been uploaded";
        } else {
            echo "There was an error uploading the file, please try again!";
        }
    }
        

}
?>