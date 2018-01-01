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
<?php include('includes/header.php') ?>


  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">POSTVIEWER</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
    </div>
  </nav>
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
<?php include('includes/footer.php') ?>
