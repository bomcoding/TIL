<?php
rename('data/'.$_POST['old_title'], 'data/'.$_POST['title']); //파일의 이름을 바꾼다.
file_put_contents('data/'.$_POST['title'], $_POST['description']);
header('Location: /index.php?id='.$_POST['title']);
?>