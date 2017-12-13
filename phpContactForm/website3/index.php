<?php
      // message variables
        $msg = '';
        $msgClass= '';


      // Check for post data from submit var declared as a button type
      if (filter_has_var(INPUT_POST,'submit')) {
        // get form data and set equal to a var
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

      // make all fields required
      // empty($name); the empty function checks if a var has a value
      // use ! to make it not
      if (!empty($email) && !empty($name) && !empty($message)) {
            //make email valid
            if (filter_var($email, FILTER_VALIDATE_EMAIL)==false) {
              // failed
              $msg = 'Please fill in valid email !';
              $msgClass = 'alert-danger';
            }else {

              // send the email
              // set recipient adress = to toEmail ( this email is the set email server on your php server)
              $toEmail= 'donniethedev@gmail.com';
              // add a subject
              $subject = 'Contact Request From'.$name;
              $body = '<h2>Contact Request</h2>
                      <h4>Name</h4><p>'.$name.'</p>
                      <h4>Email</h4><p>'.$email.'</p>
                      <h4>Message</h4><p>'.$message.'</p>
              ';
              // email headers
              // carraige retunr and new line \r\n
              $headers = 'MIME-Version: 1.0'.'\r\n';
              // append to the header variable to not overwrite but add on
              //specify content type
              // and charset to utf-8
              $headers .= 'Content-Type:text/html;charset=UTF-8'.'\r\n';

              // from Email adress
              $headers .= "From: ".$name.'< '.$email.' >'   .'\r\n';

              // use the mail function
              // ($toEmail , $subject , $body, $headers) these params are needed for mail();
              if(mail($toEmail , $subject , $body, $headers)){
                // email sent
                $msg = 'Email Sent !!';
                $msgClass = 'alert-success';
              }else{
                // email failed
                // email sent
                $msg = 'Email Failed !!';
                $msgClass = 'alert-danger';

              }

            };
      }else {
        $msg = 'Please Fill in all fields !';
        // make it a red alert
        $msgClass = 'alert-danger';
      };

      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/cosmo.css">
  <link rel="stylesheet" href="css/main.css">
  <title>Contact Us!</title>
</head>
<body>
  <nav class="navbar bg-info">
    <div class="container">
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand "><span class="homeButton">HOME</span></a>
      </div>
    </div>
  </nav>

  <div class="container thisContainer">
    <?php if($msg != ''): ?>
      <div class="alert <?php echo $msgClass; ?>">
        <?php echo $msg; ?>
      </div>
    <?php endif; ?>
    <!-- could say index.php but we are going to use server superglobal -->
    <form  action="<?php echo$_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
      <label for="">Name :</label>
          <!-- if the post value is set echo out the value otherwise echo nothing to make values stay there if they are right and other inputs are wrong-->
      <input class="form-control"type="text" name="name" value="<?php echo isset($_POST['name']) ? $name:''; ?>">
    </div>
    <div class="form-group">
      <label for="">Email :</label>
      <input class="form-control"type="text" name="email" value="<?php echo isset($_POST['email']) ? $email:''; ?>">
    </div>
    <div class="form-group">
      <label for="">Message :</label>
      <textarea class="form-control"type="text" name="message" value=""><?php echo isset($_POST['message']) ? $message:''; ?></textarea>
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
  </div>

</body>
</html>
