<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <?php
        $i = 0;
        //반복문
    ?>
    <!-- <ol>
        <li><a href="index.php?id=HTML">HTML</a></li>
        <li><a href="index.php?id=CSS">CSS</a></li>
        <li><a href="index.php?id=JavaScript">JavaScript</a></li>
        <li><a href="index.php?id=PHP">PHP</a></li>
    </ol> -->
    <h2>
        <?php
        if(isset($_GET['id'])){  //값이 있냐 없냐에 따라서 true or false로 값을 반환한다.
            echo $_GET['id']; //true일때 처리
        }else{
            echo "Wellcome"; //false일때 처리
        }
        ?>
    </h2>
    <?php
        if(isset($_GET['id'])){
            echo file_get_contents("data/".$_GET['id']);
            //file_get_contents함수는 파일내용을 표현해주는 함수다.
        }else{
            print("bomcoding의 첫 PHP프로그램");
        }
    ?>
</body>
</html>