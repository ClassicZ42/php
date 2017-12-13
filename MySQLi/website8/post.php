<?php
require('config/config.php');
require('config/db.php');
//get ID from the get in the url
//sql injection stoppage
// mysql_real_escape_string(theConnectionToDbVar,"string");
$id = mysqli_real_escape_string($conn , $_GET['id']);
//create query
$query = 'SELECT * FROM posts WHERE id='.$id;

// get a result
$result = mysqli_query($conn,$query);

// fetch all the data in this db
// put in asosiative array (MYSQLI_ASSOC)
$post = mysqli_fetch_assoc($result);

// free result from memory
mysqli_free_result($result);

//close connection

mysqli_close($conn)
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/bootstrap.css">
  <title>PHP blog</title>
</head>
<body>
  <div class="container">
    <a href="<?php echo ROOT_URL ?>"><button type="button" class="btn btn-primary">Back</button></a>
  <h1 style="text-decoration:underline;text-align:center">Posts:</h1>
  <br>
  <!-- Loop through array and output well'sfor each item -->
        <h3 style="text-decoration:underline;text-align:center"><?php echo $post['title']; ?></h3>
        <small>Created on <?php echo  $post['created_at'];?> by <?php echo $post['author'].'<br>'; ?></small>
        <br>
        <p>Post: <?php echo $post['body']; ?> </p>
  </div>
</body>
</html>
