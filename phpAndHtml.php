<?php
$name = "Dave";
$hour = 18;
?>

<html>
    <head>
        <title>Website</title>
        <meta charset="utf-8">
    </head>

    <body>
        <h1>Lorem Ipsum</h1>

        <p>Hello <?= $name; ?> !</p>

<!-- MIX PHP & HTML -->
<?php if($hour < 12): ?>
    Good morning
<?php elseif($hour < 18): ?>
    Good afternoon
<?php elseif($hour < 22): ?>
    Good evening
<?php else: ?>
    Good night
<?php endif; ?>
    </body>
</html>