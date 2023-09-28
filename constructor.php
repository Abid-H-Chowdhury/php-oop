<?php 
// class and object
class person{
    public $name = "No name";
    public $age = 0;

    //construct method
    function __construct($name = "No name" , $age = 0){
   $this->name = $name;
   $this->age = $age;
    }
   // method
    function show(){
        echo $this->name . " - " . $this->age . "\n";
    }
}
// object of person class
$p1 = new person();

$p1->show();

$p1->name = "Abid Hasan Chowdhury";
$p1->age = 25;
$p1->show();

$p2 = new person("Taj",20);
$p2->show();
?>