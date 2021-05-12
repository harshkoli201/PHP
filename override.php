<?php
class employee{
    public $n,$id;
    function get($na,$i)
    {
        $this->n=$na;
        $this->id=$i;
    }
    function display()
    {
        echo "name->",$this->n;
        echo "ID->",$this->id;
    }
}
class result extends employee{
    function show(){
        echo "from result class </br>";
    }
    function display()
    {
        echo "from display method of result class</br>";
    }
}
$r = new result();
$r->get("hartsh",43);
$r->display();
$r->show();
$r->display();
?>