<?php
//ex 4   //////////deconstructor functions

  class Person{


    private $name;
    private $email;

    public function __construct($name,$email){

        echo __CLASS__.' created'.'<br>';
        $this-> name = $name;
        $this-> email = $email;
    }

    //create a deconstructor function

    public function __destruct(){
        echo '<br>'.__CLASS__.' destroyed';
    }


    public function setName($name){
      $this-> name = $name;
    }

    public function getName(){
      return $this-> name;
    }


    public function setEmail($email){
      $this-> email = $email;
    }

    public function getEmail(){
      return $this-> email;
    }

  };

  $person1 = new Person('Donovan','ClassicZ42@Outlook.com'); ;


    echo $person1->getName();
    echo "<br>";
    echo $person1->getEmail();






 ?>
