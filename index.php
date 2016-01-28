<?php include 'classes/autoload.php'; ?>
<html>
<head><title>Hello Developers</title></head>
<body>
    <?php
        $user = new Model_User();
        $salutions = new Service_Salutations();
        echo $salutions->getGreeting('Good evening') . ' ' . $user->getName();
    ?>
<h1>
    <?php
        $weather = new Service_Weather();
        echo $salutions::GREETING;
        echo $weather->todaysWeather();
    ?>
</h1>

<?php if ($weather->todaysWeather() === 'Rain') : ?>
    <span>Booo :(</span>
<?php endif; ?>

</body>
</html>