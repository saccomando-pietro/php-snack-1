<?php
$orario = 12;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($orario < 12) {
        echo '🌞';
    } else {
        echo '🌛';
    }
    ?>
</body>
</html>
