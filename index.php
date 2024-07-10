<?php

class Person{

    public function __construct($namePara, $pwPara){
        $this->name = $namePara;
        $this->password = $pwPara;
    }

    public $name;
    protected $age;
    private $password;

    public function studentName(){
        echo 'The Student Name is '.$this->name.'<br>';
    }

    protected function studentAge(){
        echo 'The Student Age is '.$this->age.'<br>';
    }

    private function studentPw(){
        echo 'The Password is '.$this->password.'<br>';
    }

    public function studentPw1(){
        $this->studentPw();
    }
}

class Employee extends Person{
    public function showAge(){
        $this->age = 20;
        $this->studentAge();
    }

    // public function showPw(){
    //     $this->studentPw1();
    //     $this->password = '@priya#';
    // }
    
}
$object = new Employee('Riya', '@riya#');
$object->studentName();
$object->studentPw1();
$object->showAge();

?>