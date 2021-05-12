<?php

class rectangle
{
    public $l;
    public $b;
    function rec($l,$b)
    {
        $this->l = $l;
        $this->b = $b;
    }
    function dis_r()
    {
        echo "Area of Rectangle",($this->l*$this->b),"</br>";
    }
}
class square extends rectangle
{
    public $s;
    function square($s)
    {
        $this->s = $s;
    }
    function dis_s()
    {
        echo "Area of Square",($this->s*$this->s),"</br>";
    }
}
class triangle extends square
{
    public $le;
    public $br;
    function tria($le,$br)
    {
        $this->le = $le;
        $this->br = $br;
    }
    function dis_t()
    {
        echo "Area of Triangle",(0.5*$this->le*$this->br),"</br>";
    }
}
$tr = new triangle;
$tr->rec(3,5);
$tr->square(2);
$tr->tria(4,5);
$tr->dis_r();
$tr->dis_s();
$tr->dis_t();
?>