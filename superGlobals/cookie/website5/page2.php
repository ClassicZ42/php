  <?php
  // you can also set cookies like this:
  //setcookie('username', 'Frank', time() + (86400 * 30));
  // print out how many cookies there are
  if(count($_COOKIE) > 0){
		echo 'There are '.count($_COOKIE). ' cookies saved<br>';
	} else {
		echo 'There are no cookies saved<br>';
	}
      // see if cookie is set
      if(isset($_COOKIE['username'])){
          echo "User :".$_COOKIE['username'].' is set !' ;
      }else {
        echo "User is not set";
      }
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

</body>
</html>
