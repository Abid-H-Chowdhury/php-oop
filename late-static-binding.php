<?php
    //1. In Late Static Binding  we need to use (static) keyword without useing (self) keyword.
    //2.self ===> print propertise value of parent class.
    //3.static ===> print propertise value of derived class.
    //4.When we use (self) , print propertise value of parent class.
    class baseNew{
        protected static $name = "Abid hasan";
        function show(){
            echo self::$name;
        }
        function showNew(){
            echo static::$name;
        }
    }
    
    class derived extends baseNew{
       protected static $name = "chowdhury";
    }
    
    $cobj = new derived();
    $cobj->show();         //self ===> print propertise value of parent class.
    echo "<br>";
    $cobj->showNew();      //static ===> print propertise value of derived class.