<?php
    // date(); function

              // params - 'd' gives us day
              echo date('d');
              // params - 'm' gives us month
              echo date('m');
              // params - 'F' gives us month in letters
              echo date('F');
              // params - 'Y' gives us Year
              echo date('Y');
              // params - 'l' gives us day of the week
              echo date('l');
              // you can still a string though
              echo date('d/m/Y/l');

    // have to define a time zone
    date_default_timezone_set('Africa/Johannesburg');

              // params - 'l' gives us hour
              echo date('h');
              // params - 'l' gives us min
              echo date('i');
              // params - 'l' gives us seconds of the week
              echo date('s');
              // params - 'l' gives AM or PM
              echo date('a');


    // TIMESTAMP
    /*
        A unix time stamp is a long integer containing the number of
        seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified

        we use this integer given as a way to track time all around the world

     */
    // mktime(hours,minutes,seconds,month,day,year);
    $timestamp = mktime();
    echo $timestamp;

    // you can format the TIMESTAMP

    echo date('m/d/Y',$timestamp);

    // you can turn strings to timestamps

      $timeString = strtotime('7:00pm March 22 2019');
      // can be vague $timeString = strtotime('tomorrow');
      // $timeString = strtotime('next Sunday');
      echo date('m/d/Y h:i:sa',   $timeString);


?>
