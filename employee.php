<?php
class employee{
    
    public $name;
    public $sal;
    
    function __construct($name,$sal){
        $this->name = $name;
        $this->sal = $sal;      
    }
    function dis()
    {
        echo "Employee Name  ", $this->name , "Employee Salary" ,$this->sal;
    }
}
    $obj = new employee("harsh",5000);
    $obj->dis();

?>