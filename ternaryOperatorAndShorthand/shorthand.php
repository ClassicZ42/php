<?php
    $loggedIn - true;
    // if short hand
    // if true logged in if false (else) not logged in
    #  echo ($log) ? 'Logged in' : 'Not logged in ';

      // assign vars based on condition
      // set this vars value  to true if logged in is true
      // else  set it to false
      $isRegistered = ($loggedIn) ? true : false;
      echo $isRegistered;

      # nest statements

      $age = 20;
      $score = 15;

      //1.1 if score > 10 and their age is greater than ten its average or
      //1.2 if score > 10 and age < 10 echo exceptional


      //otherwise if your score < 10  and your age > 10 it's horrible or
      // if  score < 10 age > 10 its
      echo 'Your score is : '.($score > 10 ? :($age > 10 ? 'average1' : 'exceptional'):($age < 10 ?'Horrible':'average2'));


?>
