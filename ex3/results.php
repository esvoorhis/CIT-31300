<html>
<body>
<?php


    $thisFirstName = $_POST['firstname'];
    $thisLastName = $_POST['lastname'];
    $thisEmailAdd = $_POST['emailadd'];

        echo "The registered user's first name is: ". $thisFirstName . "<br />";
        echo "The registered user's last name is: " . $thisLastName . "<br/>";
        echo "The registered user's email address is: " . $thisEmailAdd . "<br/>";


?>
</body>
</html>