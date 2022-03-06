<?php

    include './includes/config.php';
    include './includes/utils.php';

    $city = 'Paris';

    if(!empty($_GET['city']))
        $city = $_GET['city'];

    $url = 'https://api.openweathermap.org/data/2.5/weather?q=' . urlencode($city) . '&units=metric&appid=02ab42f7ed9d4378474ce2d45b4473db';
    $result = apiCall($url);
    
    if($result->cod === 200)
    {
        $staticMapUrl = 'https://maps.googleapis.com/maps/api/staticmap?';
        $staticMapUrl .= http_build_query([
            'center' => $result->coord->lat.','.$result->coord->lon,
            'markers' => $result->coord->lat.','.$result->coord->lon,
            'zoom' => 6,
            'size' => '300x300',
            'key' => 'AIzaSyB6u8RLqSXjwSCunqI-U9Mzz0s-JYNKWrc',
        ]);
    }

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

    <form action="#">
        <input type="text" name="city" value="<?= $city ?>">
        <input type="submit">
    </form>

    <?php if($result->cod !== 200): ?>
        <h1>Ville non trouvée</h1>
    <?php else: ?>
        <h1>Météo à <?= $city ?></h1>

        <img src="<?= $staticMapUrl ?>">

        <h3><?= ucfirst($result->weather[0]->description) ?></h3>
        <table>
            <tr>
                <td>Température</td>
                <td><?= $result->main->temp ?>°</td>
            </tr>
            <tr>
                <td>Pression</td>
                <td><?= $result->main->pressure ?>hPa</td>
            </tr>
            <tr>
                <td>Humidité</td>
                <td><?= $result->main->humidity ?>%</td>
            </tr>
            <tr>
                <td>Vent</td>
                <td><?= $result->wind->speed ?>m/s</td>
            </tr>
        </table>
    <?php endif ?>
    
</body>
</html>