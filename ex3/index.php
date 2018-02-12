<html>
<body>
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

function myload($class){
    include_once('classes/'.$class.'.class.php');
}
spl_autoload_register('myload');

$Registered = new Registered('newuser','Regular User');

$testequ = $Registered::equation(10,4);

?>

<?php
{
echo "Before You Fill Out This Form, Let's Do Some Math!: $testequ<br>";
    ?>
        <form action="results.php" method ="post">


            <fieldset>

            <div><label for="firstname">First Name: </label> <input
                    id="firstname" type="text" name="firstname" value=""/>
            </div>
            <br>

            <div><label for="lastname">Last Name: </label> <input
                    id="lastname" type="text" name="lastname" value=""/>
            </div>
            <br>
            <div><label for="emailadd">Email Address: </label> <input
                    id="emailadd" type="text" name="emailadd" value=""/>
            </div>
            </fieldset>

    <?php
}
?>
    <br>
    <div class="buttonrow">
        <input type="submit" value="Register" class="button" />
    </div>
</form>
</body>
</html>

