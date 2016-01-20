<html>
<head><title>Hello Developers</title></head>
<body>
<?php
    include 'libs/salutations.php';
    include 'libs/user.php';
    include 'libs/weather.php';
    echo getGreeting('Good evening') . ' ' . getName();
?>
<h1><?= todaysWeather(); ?></h1>

<?php if (todaysWeather() === 'RAIN!!!!') : ?>
    <span>Booo :(</span>
<?php endif; ?>
</body>
</html>