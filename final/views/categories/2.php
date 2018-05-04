<html>
<?php include('views/elements/header.php');?>
<div class="container">
    <div class="page-header">
        <h1>Weather Posts</h1>
    </div>
    <?php
        getCatPosts($cid= '1'); // call the function
    ?>
    <?php
        if( is_array($post) ) {
            extract($post);
        }
    ?>
    <div class="container">
        <div class="page-header">
            <h1><?php echo $title;?></h1>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'post/'. $categoryid.'">' . $name .'</a><br>'?>
        </sub>
    </div>
</div>
</html>
<?php include('views/elements/footer.php');?>
