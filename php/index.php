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
    $json = file_get_contents('data.json'); 

    if ($json === false) {
        die('Error reading the JSON file');
    }

    $json_data = json_decode($json, true); 

    if ($json_data === null) {
        die('Error decoding the JSON file');
    }

    echo "<pre>";
    print_r($json_data);

    echo "</pre>";

    ?>
</body>
</html>
