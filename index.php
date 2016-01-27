<html>
<head><title>Hello Developers</title></head>
<body>
<?php
    include 'basic-autoloader.php';
    $user = new Model_user();
    $greeting = new Model_salutations();
    $weather = new Model_weather();
    echo $greeting->getGreeting('Good evening') . ' ' . $user->getName();
?>
<h1><?= $weather->todaysWeather(); ?></h1>

<?php if ($weather->todaysWeather() === 'RAIN!!!!') : ?>
    <span>Booo :(</span>
<?php endif; ?>
</body>
</html>