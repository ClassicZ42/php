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
<?php include('includes/header.php') ?>

  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
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
    <a href="<?php echo ROOT_URL ?>"><button type="button" class="btn btn-primary">Back</button></a>
    <div class="jumbotron">

  <br>
  <!-- Loop through array and output well'sfor each item -->
        <h3 style="text-decoration:underline;text-align:center"><?php echo $post['title']; ?></h3>
        <small>Created on <?php echo  $post['created_at'];?> by <?php echo $post['author'].'<br>'; ?></small>
        <br>
        <p>Post: <?php echo $post['body']; ?> </p>
    </div>
  </div>
<?php include('includes/footer.php'); ?>
