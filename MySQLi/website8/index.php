<?php
//require db
require('config/config.php');
require('config/db.php');

//create query
$query = 'SELECT * FROM posts';

// get a result
$result = mysqli_query($conn,$query);

// fetch data in asosiative array (MYSQLI_ASSOC)
$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
  <h1 style="text-decoration:underline;text-align:center">Posts:</h1>
  <br>
  <!-- Loop through array and output well'sfor each item -->
  <?php foreach($posts as $post): ?>
      <div class="jumbotron">
        <h3 style="text-decoration:underline;text-align:center"><?php echo $post['title']; ?></h3>
        <small>Created on <?php echo  $post['created_at'];?> by <?php echo $post['author'].'<br>'; ?></small>
        <br>
        <p>Post: <?php echo $post['body']; ?> </p>
        <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
      </div>
  <?php endforeach; ?>
  </div>
</body>
</html>
