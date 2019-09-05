<?php
    require_once('lib/print.php');
    require_once('lib/top.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
            print_title();
        ?>
        </title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
        <?php
        print_list();
        ?>
    <ol>
    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
        <p>
            <input type="text" name="title" placeholder="Title">
        </p>
        <p>
            <textarea name="description" placeholder="description"></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
<?php require_once('view/bottom.php');?>