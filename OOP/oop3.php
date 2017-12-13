<?php
//ex 3   //////////Constructor functions

  class Person{


    private $name;
    private $email;

    // create a constructor using  public function __construct(){};
    // its a method that runs when the object is created
    public function __construct($name,$email){
        // this code runs when you create an object
        // now the set function happens when you create function
        // __CLASS__ gives us the value of a class
        echo __CLASS__.' created'.'<br>';
        $this-> name = $name;
        $this-> email = $email;
    }

    // name getter and setter
    public function setName($name){
      $this-> name = $name;
    }

    public function getName(){
      return $this-> name;
    }
    // email getter and setter

    public function setEmail($email){
      $this-> email = $email;
    }

    public function getEmail(){
      return $this-> email;
    }

  };
  // now set name and email values here
  $person1 = new Person('Donovan','ClassicZ42@Outlook.com'); ;


    echo $person1->getName();
    echo "<br>";
    echo $person1->getEmail();






 ?>
