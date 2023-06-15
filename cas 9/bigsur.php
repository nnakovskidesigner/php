<?php
    $service = "page1";

    if ($service == "page1"){
        $backgroundColorPage = "#00bbe6";
    } elseif ($service == "page2"){
        $backgroundColorPage = "#f44336";
    } else {
        $backgroundColorPage = "#28a745";
    }
?>

<html>
    <body style="background-color: <?php echo $backgroundColorPage; ?>">
        <p>Hi! I'm a colored page by PHP :)</p>
    </body>
</html>