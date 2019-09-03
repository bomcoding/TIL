<?php
function print_title(){
    if(isset($_GET['id'])){//값이 있냐 없냐에 따라서 true or false로 값을 반환한다.
        echo $_GET['id'];//true일때 처리
    }else{
        echo "Wellcome";//false일때 처리
    }
}
function print_description(){
    if(isset($_GET['id'])){
        echo file_get_contents("data/".$_GET['id']);
        //file_get_contents함수는 파일내용을 표현해주는 함수다.
    }else{
        print("bomcoding의 첫 PHP프로그램");
    }
}
function print_list(){
    $list = scandir('./data');
    $i = 0;
    //반복문
        while($i < count($list)){
            if($list[$i] != '.'){
                if($list[$i] != '..'){
            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            }
        }
        $i = $i+1;
    }
}
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
</body>
</html>