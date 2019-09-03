<?php
file_put_contents('data/'.$_POST['title'],$_POST['description']);  //파일 생성
// echo "<p>title : ".$_GET['title']."</p>"; //연관배열
// echo "<p>description : ".$_GET['description']."</p>";  //form으로 넘어온 name값이 출력된다.
?>