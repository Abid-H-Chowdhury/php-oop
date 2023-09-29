<?php
    class base{
        public $name = "Abid";

        public function cal($a,$b){
            return $a * $b ;
        }
    }

    class derived extends base{
        public $name = "Chowdhury";

        public function cal($a,$b){
            return $a + $b ;
        }
    }

    $person2 = new base();
    echo $person2->name."<br>";
    echo $person2->cal(5,10)."<br>";

    $person1 = new derived();
    echo $person1->name."<br>";      //Properties Overriding
    echo $person1->cal(5,10)."<br>"; //Methods Overriding  

?>