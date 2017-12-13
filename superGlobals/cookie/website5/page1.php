<?php
  // a cookie is like a session but the data is stored on the client side
  // not on the server
  // sessions are more secure than cookies

  // check for submit
  if (isset($_POST['submit'])) {
    $username = htmlentities($_POST['username']);
    // set cookie with setcookie('nameOfCookie',$value,experation);
    //use the time(); function for 1 hour = 3600 seconds
    setcookie('username',$username,time()+3600);

    // redirect to different page
    header('Location: page2.php');
  }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>PHP Cookies</title>
 </head>
 <body>
 	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 		<input type="text" name="username" placeholder="Enter Username">
 		<br>
 		<input type="submit" name="submit" value="Submit">
 	</form>
 </body>
 </html>
