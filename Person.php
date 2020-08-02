<?php

class Person{
    private $fname;
    private $lname;
    private $age;
    private $gender;
    const API_KEY="213kif248fibierilf348iklesirfg4w43oifg45t8ogii";

    //without using getters and setters for each property.use this magic methods
    public function __set($name, $value){
        $this->$name=$value;
    }
    public function __get($name){
     return $this->$name;
    }

    public function __construct($fname,$lname,$age,$gender="Male"){
        $this->fname=$fname;
        $this->lname=$lname;
        $this->age=$age;
        $this->gender=$gender;
    }
    public function personDetails(){
        return "Name :" .$this->fname." ".$this->lname."\nAge :".$this->age."\nGender :".$this->gender;
    }

}

class Employee extends Person {
    private $job;
    private $company;

    public function __set($name, $value){
     return $this->$name=$value;
    }
    public function __get($name){
        return $this->$name;
    }

    public function __construct($job,$company,$fname,$lname,$age,$gender="Male"){
        parent::__construct($fname,$lname,$age,$gender);
        $this->job=$job;
        $this->company=$company;
    }
    public function employeeDetails(){
        return $this->personDetails()."\nJob : ".$this->job."\nCompany :".$this->company;
    }

}

$personOne=new Person("Fname","Lname",22);
echo $personOne->personDetails();
echo ("\n_____________________\n\n");
$Sachith=new Employee("Software Architecture","My Company","Sachith","Siriwardana",24);
echo $Sachith->employeeDetails();
echo ("\n_____________________\n\n");
$Sachith->fname="Savin";
echo $Sachith->fname;
$Sachith->job="CTO";
echo $Sachith->job;
echo "\n".Person::API_KEY;

