<?php
    if(isset($_POST['addpost'])){
        //print_r($_POST);
        $title = $_POST['title'];
        $content = $_POST['content'];
    }
?>
<form action="index.php?act=addpost" method="POST">
<div id="wrapper">
        <h1 class="post-title"><?php echo $title; ?></h1>
        <div class="post-content">
            <?php echo $content; ?>
        </div>
    </div>
</form>