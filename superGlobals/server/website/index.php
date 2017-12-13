
<?php
  include 'server-info.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
  <div class="container">
    <!-- START OF SERVER SECTION-->
    <h1>Server & File Info</h1>
    <!-- This is a shorthand for if statements when using php in html-->
    <?php if($server): ?>
      <ul class="list-group">
        <!-- loop through server array and bind all they key's into the $key
              and bind all the data from server-info to $value
         var-->
        <?php foreach($server as $key => $value): ?>
        <!-- For each item in array creat a li with a class of list-group-item -->
        <li class="list-group-item">
        <!-- list the key of the spicific itteration in bold-->
        <strong><?php echo $key; ?>: </strong>
        <?php echo $value; ?>
        </li>
        <?php endforeach; ?>
      </ul>
    <?php endif;  ?>

    <!-- START OF CLIENT SECTION-->
    <h1>Client Info</h1>
    <!-- This is a shorthand for if statements when using php in html-->
    <?php if($client): ?>
      <ul class="list-group">
        <!-- loop through server array and bind all they key's into the $key
              and bind all the data from server-info to $value
         var-->
        <?php foreach($client as $key => $value): ?>
        <!-- For each item in array creat a li with a class of list-group-item -->
        <li class="list-group-item">
        <!-- list the key of the spicific itteration in bold-->
        <strong><?php echo $key; ?>: </strong>
        <?php echo $value; ?>
        </li>
        <?php endforeach; ?>
      </ul>
    <?php endif;  ?>


  </div>
</body>
</html>
