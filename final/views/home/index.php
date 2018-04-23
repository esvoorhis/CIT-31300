<?php
include('views/elements/header.php');?>
    <div class="container">
    <div class="page-header">
        <h1>My house is a mess because of Tetris</h1>
    </div>
        <?php
        $image_url='https://i.dmarge.com/2017/02/tetris.jpg';
        ?>
        <img src="<?php echo $image_url;?>">
    <br class="page-header">
        <h2>I worked really hard on the Fox News feed so I'm gonna leave it.</h2>
        <br>I really do still love Tetris. Since the 80's when I drained the batteries of my uncle's Gameboy while he was sleeping.</br>
        I'm freaked out about graduating in a couple weeks. after 10 years in college it will be a whole new life for me and my kids.</br>
        What will I do with myself. What if I find out I don't like my friends or something? (now that I have time for socializing)</p>
    </div>
        <div class="page-header">
            <h3>Latest News from <?php echo $title;?></h3>
        </div>
        <?php
        echo $data;
        ?>
    </div>
<?php include('views/elements/footer.php');?>