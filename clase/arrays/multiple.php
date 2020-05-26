<?php
    $comunidades=[
        "C Valenciana"=> array("Valencia","Castellon","Alicante"),
        "Madrid"=>null
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    var_dump($comunidades);
    echo "<br>";
    echo "------------------";
    echo "<br>";
    $comunidades["Madrid"]=array("Madrid");
    var_dump($comunidades);
    $comunidades[]="Cataluña";
    echo "<br>";
    echo "------------------";
    echo "<br>";
    var_dump($comunidades);
    ?>
</body>
</html>