<?php
    // connect to mySQL
    // use mysqli_connect(hoast,user,password,db_name);
    $conn =  mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    // check connection
    //use mysqli_connect_errno();
    // this checks for an error 1=(true we are not connected ) 0=(false we are connected )
    if (mysqli_connect_errno()) {
      //connection failed
      echo "Failed to connect ty mysql ".mysqli_connect_errno();
    }

    ?>
