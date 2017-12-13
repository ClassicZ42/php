<?php
    // substr() returns a portion of a string
    // give it a string and a starting point
    // 0 is start obviously
    // you can start anywhere
    // and end anywhere
    $output = substr('hello there',0,3);
    echo $output;


    // strlen();
    // this returns the string length
    $output = strlen('How long am I?');
    echo $output;


    // strpos();
    // finds the position of first occurences of a specified sub string

    $output = strpos('hello world','world');
    echo $output;

    // strrpos();
    // finds the position of the last occerence of aspecified sub string

    $output = strrpos('hello world','world');
    echo $output;

    // trim();
    // strips whitespace

    $text = 'Hello There                       ';
    var_dump($text);
    echo '<br>';
    $trimmed = trim($text);
    var_dump($trimmed);

    // strtoupper();
    // makes everything uppercase

    // strtolower();
    // makes everything lowercase

    //ucwords();
    // capatilizes every word

    //str_replace();
    //replaces all occurences of a string with a given replacement string

    $text = 'Hello World';
    // params( what  we search , what we replace , $whatWeSearchThrough)
    $output = str_replace('World','Everyone',$text);
    echo $output;

    //is_string();
    // check if its a string
    $val = 'Hello';
    $output = is_string($val);
    echo $output;

    //gzcompress()
    // Compresses a string

      //gzuncompress()
    // Uncompresses a string


?>
