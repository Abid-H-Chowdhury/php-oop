<?php
    // public ==> protected  ==> private
    //                 class itself == outside class == derived class
    // public    ==>       yes      ==      yes      ==     yes
    // protected ==>       yes      ==      No       ==     yes
    // private   ==>       yes      ==      No       ==      No

    class A {
        public $name;
        protected $salary;
        private $age=27;

        public function __construct($n)
        {
            $this->name=$n;
        }
        public function show(){
            echo "Name : ".$this->name."<br>";
            echo "Age : ".$this->age."<br>";
        }

    }

    class B extends A{
        public function __construct($n,$a){
            $this->name=$n;
            $this->salary=$a;
         }
         public function show(){
            echo "Name : ".$this->name."<br>";
            echo "salary : ".$this->salary."<br>";
        }

    }
    $p1= new A("Abid");
    $p1->show();

    $p2= new B("Hasan",2786);
    $p2->show();
?>