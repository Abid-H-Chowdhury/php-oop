<?php
    //1.static propertise (variable) and static methods (function) can use without making object of that class.
    //2.can not use this keyword.
    //3.we have to use SELF

class base{
    public static $name="Abid";
    public static function show(){
        echo self::$name;
    }
    public function __construct($n){
       echo self::$name = $n;
    }

}

base::show();
echo "<br>";
$obj = new base("Hello World");
echo "<br>";



class baseNew{
    public static $name="hasan";
}

class derived extends baseNew{
    public static function dis(){
        echo parent::$name;
    }
}

$cobj = new derived();
$cobj->dis();
?>