<?php
    require_once('lib/print.php');
    require_once('lib/top.php');
?>
    <a href="create.php">create</a>
    <?php if(isset($_GET['id'])){?>  <!--id값이 있을때 update를 보여준다.-->
        <a href="update.php?id=<?= $_GET['id']/*echo와 같은 의미*/?>">update</a> 
        <form action="delete_process.php" method="POST">
            <input type="hidden" name="id" value="<?= $_GET['id']?>">
            <!--delete일때는 a태그, 즉 link방식은 get방식임으로 위험하다. 때문에 post방식인 버튼방식으로 해야한다.-->
            <input type="submit" value="delete">
        </form>
    <?php } ?>
    <h2>
        <?php
        print_title();
        ?>
    </h2>
    <?php
        print_description();
    ?>
<?php require_once('view/bottom.php');?>