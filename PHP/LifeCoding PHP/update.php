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
    <?php if(isset($_GET['id'])){?>  <!--id값이 있을때 update를 보여준다.-->
        <a href="update.php?id=<?= $_GET['id']/*echo와 같은 의미*/?>">update</a> 
    <?php } ?>
    <h2>
        <?php
        print_title();
        ?>
    </h2>
    <?php
        print_description();
    ?>
    <form action="update_process.php" method="post">
        <input type="hidden" name="old_title" value="<?=$_GET['id']?>"><!--값을 담아서 보내주기 숨김처리-->
        <p>
            <input type="text" name="title" placeholder="Title" value="<?php print_title();?>">
        </p>
        <p>
            <textarea name="description" placeholder="Description"><?php print_description(); ?></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
<?php require_once('view/bottom.php');?>