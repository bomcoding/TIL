<?php
file_put_contents('data/'.$_POST['title'], $_POST['description']);
//data폴더 안에 받아온 값을 가진 파일을 생성한다.
header('Location: /index.php?id='.$_POST['title']);
//페이지를 redirection(재전송)시킨다. 어디로? titie에 받아온 값으로.
?>