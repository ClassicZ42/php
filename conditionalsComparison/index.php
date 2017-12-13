<?php
  // list of comparison operatiors
  /*
    == ( does not check the data type only the value)
    === ( this does check the data type as well)
    <
    >
    <=
    >=
    !=
    !==

  */


    // if and else in php( conditionals)
    // ((pretty much JS still))


    $num = 6;

    if($num == 5){
        echo '5 passed';
    }elseif ($num = 6) {
        echo '6 passed';
    }else {
      echo 'Did not pass';
    }



    # Nesting if statements

      if (condition) {
          // checks the first statement then
        if (condition) {
          // checks this statement
          // and the only runs
        }

      }


      //  Logical operators

          # and &&
          # or  ||
          # xor

          && checks for both

          if ($num > 4 && $num < 10) {
            # code...
          }

          \\ excecutes if either is true

          if ($num > 4 && $num < 10) {
            # code...
          }




      # switches
      # test for condition and runs code for bunch of cases

      $favColor = 'ampersand';

      switch($favColor){

        case 'red':
          echo "RED WAS CHOSEN SON!";
          break;

        case 'blue':
          echo "BLUE WAS CHOSEN SON!";
          break;

        case 'green':
          echo "BLUE WAS CHOSEN SON!";
          break;

        default:
          echo "UHM..!";
          break;

        }





?>
