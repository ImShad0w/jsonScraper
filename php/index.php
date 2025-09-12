<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inici</title>
</head>
<body>
    <h1>Pàgina inicial</h1>
    <?php 

    function randomPastelColor() {
    $r = mt_rand(100, 255);
    $g = mt_rand(100, 255);
    $b = mt_rand(100, 255);
    return "rgb($r, $g, $b)";
}
    $json = file_get_contents('data.json'); 

    if ($json === false) {
        die('Error reading the JSON file');
    }

    $json_data = json_decode($json, true); 

    if ($json_data === null) {
        die('Error decoding the JSON file');
    }

    //print_r($json_data);

    // Loop through all
    foreach ($json_data as $movie) {
        $color = randomPastelColor();
        echo '<div class="item" style="background-color:' . $color . ';">';
        echo "Title: " . $movie['title'] . "<br>";
        echo "Year: " . $movie['year'] . "<br>";
        echo "</div>";
    }

    ?>
</body>
</html>
