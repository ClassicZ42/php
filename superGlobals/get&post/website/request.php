<h2>Post Output: </h2>
<?php
 // request promps user before posting
  if (isset($_REQUEST['name'])) {
      print_r($_REQUEST);
  };

  // request works with post and get requests

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>REQUEST</title>
</head>
<body>
  <h1>POST FORM</h1>
  <form class="" action="request.php" method="post">
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
