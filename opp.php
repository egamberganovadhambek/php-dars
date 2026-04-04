<?php
class mevalar
{
    public $name;
    public $color;


     function __construct($name,$color)
    {
        $this->name =$name;
        $this->color =$color;
    }

    function meva(){
        echo "Meva nomi". " ". this->name ." "."rangi". $this->color. " ".
    }
}
 $olma = new mevalar(olma,qizil);
 $olma->meva();

 $nok = new mevalar(nok,sariq);
 $nok->meva();

$uzum = new mevalar(uzum,yashil);
$uzum->meva();














