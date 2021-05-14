<?php
class employee{
    public $eid,$esal;
    function __construct($id,$sal)
    {
        $this->eid = $id;
        $this->esal = $sal;
    }
    function display()
    {
        echo "Employee ID = ",$this->eid;
        echo "</br> Employee Salary = ",$this->esal; 
    }
}
$e = new employee(123,500000);
$e->display();
?>