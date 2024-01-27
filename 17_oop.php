<?php

class User{
    //properties - attributes that belong to a class

    //access modifiers
    //1. public - can be accessed from anywhere
    //2. private - can only be accessed inside the class
    //3. protected - accessed from inside the class by inheriting the class
    public $name;
    public $email;
    public $password;

    //constructor - method that runs when an object is created
    public function __construct($name,$email,$password){
        // echo 'Constructor ran';
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    //method is a function that belongs to a class
    function set_name($name){
        //this - the current object
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
}

//instantiate a user object
$user1 = new User('Brad','brad@gmail,com','34344');
$user2 = new User('Sam','brad@gmail,com','ddod99');

// $user1->name = 'Brad';
// $user2->name = 'sam';

// $user1->set_name('Brad');
// $user2->set_name('sam');

// var_dump($user2);

// echo $user1->get_name();
// echo $user2->get_name();

// echo $user1->email;
// echo $user2->name;

//inheritance
class Employee extends User{
    public function __construct($name,$email,$password,$title){
         parent:: __construct($name,$email,$password);
         $this->title = $title; 
    }

    public function get_title(){
        return $this->title; 
    }
}

//instantiate a new employee
$employee1 = new Employee('Sarah','sara@gmail.com','43434','Manager');

echo $employee1->get_title();
