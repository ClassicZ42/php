<h2>Post Output: </h2>
<?php
 // data was sent through the headers not through URL
 // more secure than Get
 // even safer will be https
  if (isset($_POST['name'])) {
      print_r($_POST);
  };

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GET_POST</title>
</head>
<body>
  <h1>POST FORM</h1>
  <form class="" action="post.php" method="post">
    <div class="">
        <label>Name :</label>
        <br>
        <input type="text" name="name" value="">
    </div>
    <div class="">
      <label>Email:</label>
      <br>
      <input type="text" name="email" value="">
    </div>
    <input type="submit" name="" value="Submit">

  </form>
</body>
</html>
