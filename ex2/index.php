<html>
<body>
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

include_once ("classes/users.class.php");
include_once ("classes/Chase.class.php");
include_once ("classes/Emily.class.php");

$Chase = new Chase();
$Emily = new Emily();

$Chase-> user_level = "Regular User";
$Emily-> user_level = "Administrator";


//$userOne->setLevel('Administrator');
echo "User Level: ".$Chase->user_level."</br> Registered User ID: " .$Chase->user_id."</br>";
echo "Registered User Type: ".$Chase->user_type."</br>Registered First Name: " .$Chase->first_name."</br>";
echo "Last Name: " .$Chase->last_name."</br>Registered Email: " .$Chase->email_address."</br><hr>";

echo "User Level: ".$Emily->user_level."</br> Registered User ID: " .$Emily->user_id."</br>";
echo "Registered User Type: ".$Emily->user_type."</br>Registered First Name: " .$Emily->first_name."</br>";
echo "Last Name: " .$Emily->last_name."</br>Registered Email: " .$Emily->email_address."</br>";


?>
</body>
</html>
