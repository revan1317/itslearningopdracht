<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (empty($_POST['getal'])) {
        echo "Vul een getal in!";
        exit;
    }

    $getal = $_POST['getal'];

    if (!is_numeric($getal)) {
        echo "Voer alleen cijfers in!";
        exit;
    }

    echo "<h2>Tafel van $getal</h2>";

    for ($i = 1; $i <= 10; $i++) {
        $uitkomst = $getal * $i;
        echo "$getal x $i = $uitkomst<br>";
    }
    ?>
</body>

</html>