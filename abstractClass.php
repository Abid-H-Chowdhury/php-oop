<?php   
//    1.We can't make object of Abstract Class.
//    2.We need to use inheritance.
//    3.An abstract class is a class that contains at least one abstract method. 
//    4.An abstract method is a method that is declared, but not implemented in the Abstract Class.
//    5.Abstract method is implement in the derived class (inheritance).
abstract class Parentclass{
    public $name;
    abstract protected function calculation($a,$b);
}
    class Childclass extends Parentclass{
        public function calculation($b,$c)
        {
            echo "Hello World";
        }
    }

$obj = new Childclass;
$obj->calculation(10,5);
?>

