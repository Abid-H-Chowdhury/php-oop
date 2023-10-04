<?php
    //1.When we want to make a derived class from multiple classes ,then we can not use inheritance.
    //2.When one or more classes use the same interface, it is referred to as "polymorphism".
   // 3. class that implements an interface must implement all of the interface's methods.
   //4.only methors can declire in the interface.
   //5.Properties can not declire in the interface.
    
    // Interface are similar to abstract classes. 
    //The difference between interfaces and abstract classes are:

    //    ## Interfaces cannot have properties, while abstract classes can
    //    ## All interface methods must be public, while abstract class methods is public or protected
    //    ## All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
    //    ## Classes can implement an interface while inheriting from another class at the same time

    interface parent1{
        function cal($a,$b);
    } 
    interface parent2{
        function sub($a,$b);
    }

    class Childclass implements parent1, parent2{
        public function cal($c,$d){
            echo $c + $d;
        }

        public function sub($f,$h){
            echo $f - $h;
        }
    }

    $obj = new Childclass();
    $obj->cal(10,5); 
    echo "<br>";
    $obj->sub(10,5); 
?>