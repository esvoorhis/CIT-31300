<?php
include('views/elements/header.php');?>
    <div class="container">
        <div class="page-header">
            <h1>My house is a mess because of Tetris</h1>
        </div>
        <?php $image_url='https://i.dmarge.com/2017/02/tetris.jpg';
        ?>
        <img src="<?php echo $image_url;?>">
        <br class="page-header">
        <h3>I worked really hard on the Fox News feed so I'm gonna leave it.</h3>
        <br>I really do still love Tetris. Since the 80's when I drained the batteries of my uncle's Gameboy while he was sleeping.</br>
        I'm freaked out about graduating in a couple weeks. after 10 years in college it will be a whole new life for me and my kids.</br>
        What will I do with myself. What if I find out I don't like my friends or something? (now that I have time for socializing)</p>
    </div>

    <div class="container">
        <div class="page-header">
            <h1>Top Track for Spain</br></h1>
        </div>
        <h4>Song: <?php echo $tracks->track->name;?></h4>
        <h4>Artist: <?php echo $tracks->artist->name;?></h4>
        <h4>Listeners: <?php echo $tracks->track->listers;?></h4>
    </div>

    <div class="page-header">
        <h1>Latest News from <?php echo $title;?></h1>
    </div>
<?php
echo $data;
?>
    </div>
<?php include('views/elements/footer.php');?>