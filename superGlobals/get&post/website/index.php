<h2>Get Output: </h2>
<?php
  // target that name attribute
  // check to see if name already exists( has a get request been made)
  // use the isset(); php function to check
  // get requests send data through header and is less secure
  if(isset($_GET['name'])){
      print_r($_GET);
  }
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
  <h1>GET FORM</h1>
  <form class="" action="index.php" method="get">
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
