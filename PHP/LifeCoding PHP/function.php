<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>function</h1>
    <?php
    $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quibusdam accusamus cumque quis at porro,
    
    harum impedit sint consectetur omnis. Sit, accusamus facere magni omnis id quidem recusandae itaque explicabo.";
    echo $str;
    ?>
    <h2>strlen()</h2>
    <?php
    echo strlen($str); //문자갯수표시
    ?>
    <h2>nl2br</h2>
    <?php
    echo nl2br($str); //에디터에서 띄어쓰기 한대로 br태그 자동삽입
    ?>
</body>
</html>