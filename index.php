<html>
<head><title>Hello Developers</title></head>
<body>
<?php
    include 'basic-autoloader.php';
    $salutations = new Models_salutations();
    $user = new Models_user();
    $weather = new Models_weather();

    echo $salutations->getGreeting('Good evening') . ' ' . $user->getName();
?>
<h1><?= $weather->todaysWeather(); ?></h1>

<?php if ($weather->todaysWeather() === 'RAIN!!!!') : ?>
    <span>Booo :(</span>
<?php endif; ?>
</body>
</html>