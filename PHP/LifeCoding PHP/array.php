<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    $coworkers = array('mincheol', 'leezch', '333', '444');
    var_dump(count($coworkers));
    array_push($coworkers, 'graphittie');
    var_dump($coworkers);
    ?>
</body>
</html>