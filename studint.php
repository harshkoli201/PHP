<?php


class student
{
    public $na,$ro;
    function stud($name,$roll)
    {
        $this->na = $name;
        $this->ro = $roll;
    }
    function display1()
    {
        echo "Student Name  = ",$this->na;
        echo "</br> Student RollNo = ",$this->ro;
    }
}
class result extends student
{
    public $m1,$m2;
    function res($marks1,$marks2)
    {
        $this->m1 = $marks1;
        $this->m2 = $marks2;
    }
    function display2()
    {
        echo "</br> Student Marks 1 = ",$this->m1;
        echo "</br> Student Marks 2 = ",$this->m2;
    }
}
$r = new result();
$r->stud("Jhon",5);
$r->display1();
$r->res(53,66);
$r->display2();
?>