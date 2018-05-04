<form id="registration_form" action="<?php echo BASE_URL;?>register/<?php echo $task?>" method="post">

<fieldset>
<legend>Register Today!</legend>
<label for="first_name">First Name: <?=REQFIELD?></label>
<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" maxlength="20" required="first_name" />
<br />
            
<label for="last_name">Last Name: <?=REQFIELD?></label>
<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" maxlength="20" required="last_name" />
<br />
 
<label for="email">E-mail Address: <?=REQFIELD?></label>
<input type="text" class="txt" id="email" name="email" value="<?php echo $email;?>" maxlength="100" required="email" />
<br />

<label for="password">Password: <?=REQFIELD?></label>
<input type="password" class="txt" id="password" name="password" value="<?php echo $password;?>" maxlength="100" required="password" />

    <label for="reenter">Re-enter Password: <?=REQFIELD?></label>
    <input type="password" class="txt" id="reenter" name="reenter" value="<?php echo $reenter;?>" maxlength="100" required="reenter" />

<br />

<input type="hidden" name="uID" value="<?php echo $uID ?>"/>
 
<button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
</fieldset>
<?php
// check form
$required = array('first_name', 'last_name', 'email', 'password', 'reenter');

// Loop over field names, make sure none are empty
$error = false;
foreach($required as $field) {
  if (empty($_POST[$field])) {
    $error = true;
  }
}
if ($error) {
  echo "All fields are required.";
} else exit();

if ($_POST["password"] !== $_POST["reenter"]) {
    // failed
    echo "Passwords do not match";

}
else exit();

?>

</form>