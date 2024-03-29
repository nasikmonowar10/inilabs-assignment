<?php

class Employee{
    public $name;
    public $salary;

    public function setname($name){
        $this->name= $name;
    }
    public function getname(){
        return $this->name;
    }

    public function setsalary($salary){
        if($salary>0){
        $this->salary= $salary;
    }
    }
    public function getsalary(){
        return $this->salary;
    }
}

$employee = new Employee();
$employee->setname("Nasik");
$employee->setsalary(20000);
echo "Employee is:" . $employee->getname();
echo "<br>";
echo "Salary is:". $employee->getsalary();

?>