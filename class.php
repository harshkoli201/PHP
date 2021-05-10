<?php
 class student
{
public  $name;
public $roll;
    function accept($n,$r)
    {
        $this->name=$n;
        $this->roll=$r;
    }
    function display()
    {
        echo "Name = ", $this->name;
        echo "<br>Roll = ", $this->roll;
    
    }
}
    $stu = new student();
    $stu->accept("harsh",22);
    $stu->display();

?>