<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Function</h1>
    <h2>Basic</h2>
    <?php
        function basic(){  //함수정의
            print("Lorem ipsum dolor1<br>");
            print("Lorem ipsum dolor2<br>");
        }

        basic();  //함수              
    ?>
    <h2>parameter &amp; argument</h2>
    <?php
    function sum($left, $rigth){  //함수의 입력값
        print($left + $rigth);
        print("<br>");
    }
    sum(2,4);
    sum(4,6);
    ?>
    <!-- 하나의 함수는 하나의 기능만을 담는것이 정석이다.-->
    <h2>return</h2>
    <?php
        function sum2($left, $rigth){
            return $left + $rigth; //리턴을 만나는 순간에 리턴은 종료된다.
        }
        print(sum2(2,4));
        file_put_contents('result.txt', sum2(2,4));
    ?>
</body>
</html>