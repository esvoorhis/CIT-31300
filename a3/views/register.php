<?php
require_once ('application/config.php');
include('elements/header.php');
?>

<div class='container'>
    <div class='header'>
        <h1>Register</h1>

        <?php if($message){?>
        <div class="alert alert-success">
            <button type ='button' class="close" data-dimiss="alert">x</button>
            <?php echo $message?>
        </div>
        <?php }?>
<?php include ('elements/registration_form.php');
        echo '<p><a href="'.BASE_URL.'">Back to home page</a></p>';
        ?>
        </div>
        </div>
<?php include('elements/footer.php'); ?>
