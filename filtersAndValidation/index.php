
<!-- filters are used to validate and check data types or sanitize(take out chars)
      Use $_SERVER['PHP_SELF']; instead of tying it out
-->
<?php
/*
// use filter_has_var instead of isset();
// if you use get use INPUT_GET
// second param is the value of input
// check for posted data
if (filter_has_var(INPUT_POST, 'data')) {
    echo 'Data Found';
}else {
    echo 'Data No data';
}
*/

/*
// validation
// check for post data
if (filter_has_var(INPUT_POST, 'data')) {
  // then filter the posted data and validate if its email
      if (filter_input(INPUT_POST,'data', FILTER_VALIDATE_EMAIL)) {
        echo 'email is valid';
      }else {
        echo "email is invalid";
      }
}
*/
/*
// sanitize data
if (filter_has_var(INPUT_POST, 'data')) {
      // take the post data and put it into a var
      $email = $_POST['data'];
      // remove the illegal characters
      // use the filter_var(); function
      // add in the post data ( $email) and
      // FILTER_SANITIZE_EMAIL
      // Strips out any character that doesnt belong in an email
      $email = filter_var($email,FILTER_SANITIZE_EMAIL);
      echo $email. '<br>';
      // pass the $email var in
      // change to filter_var
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'email is valid';
      }else {
        echo "email is invalid";
      }
}
*/

// Types of validation possible
#FILTER_VALIDATE_BOOLEAN
#FILTER_VALIDATE_EMAIL
#FILTER_VALIDATE_FLOAT
#FILTER_VALIDATE_INT
#FILTER_VALIDATE_IP
#FILTER_VALIDATE_REGEXP
##FILTER_VALIDATE_URL

// Types of sanitation possible
#FILTER_SANITIZE_EMAIL
#FILTER_SANITIZE_ENCODED
#FILTER_SANITIZE_NUMBER_FLOAT
#FILTER_SANITIZE_NUMBER_INT
#FILTER_SANITIZE_SPECIAL_CHARS
#FILTER_SANITIZE_STRING
#FILTER_SANITIZE_URL

?>

<form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >
  <input type="text" name="data" value="">
  <button type="submit">SUBMIT</button>
</form>
