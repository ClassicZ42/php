<?php
  // start the session
  session_start();
  //and then set the vars
  $name = $_SESSION['name'];
  $email = $_SESSION['email'];
  //
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 2</title>
</head>
<body>

      <h5> Thank you <<?php echo $name ?>! <br>We will email you at <?php echo $email ?>
      </h5>
      

</body>
</html>
