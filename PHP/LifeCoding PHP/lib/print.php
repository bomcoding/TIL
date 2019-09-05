<?php
function print_title(){
    if(isset($_GET['id'])){//값이 있냐 없냐에 따라서 true or false로 값을 반환한다.
        echo htmlspecialchars($_GET['id']);//true일때 처리
    }else{
        echo "Wellcome";//false일때 처리
    }
}
function print_description(){
    if(isset($_GET['id'])){
        $basename = basename($_GET['id']);
        echo htmlspecialchars(file_get_contents("data/".$basename));
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
        $title = htmlspecialchars($list[$i]); 
            if($list[$i] != '.'){
                if($list[$i] != '..'){
            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
            }
        }
        $i = $i+1;
    }
}
?>