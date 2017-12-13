<?php
//ex 2   //////////lets make them private

  class Person{


    private $name;
    private $email;

    // instead of creating public properties
    // use public methods to interact with the properties

    // create method setters
    // set the propety $name of the person with this public method
    public function setName($name){
      $this-> name = $name;
    }

    // create method getters
    // get the propety $name of the person with this public method
    public function getName(){
      return $this-> name;
    }

  };


  // call the setName() method wiht ->

  // create an object named $person1 it has a class of Person
  $person1 = new Person ;
  $person1->setName('Donovan G');
  echo $person1->getName();






 ?>
