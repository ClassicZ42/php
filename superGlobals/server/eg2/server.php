<h2>Post Output: </h2>
<?php
  // how to get query string info ( info about the get request)
  echo $_SERVER['QUERY_STRING']
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
  <form class="" action="server.php" method="get">
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
