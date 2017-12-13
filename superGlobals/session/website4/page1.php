<?php
    // sessions takes variables from one page over to another


    // catch the form submition
    if(isset($_POST['submit'])){
        // start a session before using session vars
        // session_start(); starts a session
        session_start();
        // create a session variable called name
        // set it equal to the post variable called name
        $_SESSION['name'] = htmlentities($_POST['name']);
        // create a session variable called email
        // set it equal to the post variable called email
        $_SESSION['email'] = htmlentities($_POST['email']);

        // redirect the page when the form is submitted
        //acesss the header(); function
        // change the location to page.2php
        header('Location: page2.php');
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sessions</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <input type="text" name="email" placeholder="Enter Email">
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
