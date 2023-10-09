<?php

$paragraph = $_POST('paragraph');

$badWord =  $_POST('badword');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        <?php echo $paragraph ?>
    </p>
    <p>
        <?php echo $badWord ?>
    </p>


</body>

</html>