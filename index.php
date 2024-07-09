<?php

class Person{

    public function __construct($namePara){
        $this->name = $namePara;
        // $this->password = $pwPara;
    }

    public $name;
    protected $age;
    private $password;

    public function studentName(){
        echo 'The student Name is '.$this->name.'<br>';
    }

    protected function studentAge(){
        echo 'The student Name is '.$this->age.'<br>';
    }

    private function studentPw(){
        echo 'The Password is '.$this->password.'<br>';
    }

    protected function studentPw1(){
        $this->studentPw();
    }
}

class Employee extends Person{
    public function show(){
        echo 'Result <br>';
        $this->age = 20;
        $this->studentAge();
        $this->password = '@priya#';
        $this->studentPw1();


    }
    
}
$object = new Employee('Riya');
$object->studentName();
// $object->studentPw1();
$object->show();


?>