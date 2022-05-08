<?php

    include './includes/config.php';

    $city = empty($_GET['city']) ? 'Paris' : $_GET['city'];
    $url = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city . '&appid=02ab42f7ed9d4378474ce2d45b4473db&units=metric';

    $jsonResult = apiCall($url);

    $staticMapUrl = 'https://maps.googleapis.com/maps/api/staticmap?';
    $staticMapUrl .= http_build_query([
        'center' => $jsonResult->coord->lat . ',' . $jsonResult->coord->lon,
        'size' => '300x300',
        'key' => 'AIzaSyB6u8RLqSXjwSCunqI-U9Mzz0s-JYNKWrc',
        'zoom' => 6
    ]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Météo à <?= $city ?></title>
</head>
<body>
    <form action="#" method="GET">
        <input type="text" name="city" value="<?= $city ?>">
        <input type="submit">
    </form>
    <h1>Météo à <?= $city ?></h1>

    <img src="<?= $staticMapUrl ?>">

    <table>
        <tr>
            <th>Description</th>
            <td><?= ucfirst($jsonResult->weather[0]->description) ?></td>
        </tr>
        <tr>
            <th>Température</th>
            <td><?= $jsonResult->main->temp ?>°</td>
        </tr>
        <tr>
            <th>Humidité</th>
            <td><?= $jsonResult->main->humidity ?>%</td>
        </tr>
    </table>
</body>
</html>