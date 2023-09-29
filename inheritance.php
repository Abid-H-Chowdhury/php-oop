<?php
    class employee{
        public $name;
        public $age;
        public $salary;

        function  __construct($n,$a,$s){
            $this->name=$n;
            $this->age=$a;
            $this->salary=$s;
         }

         function info(){
            echo "<h3>Employee Profile</h3>";
            echo "Name : ".$this->name."<br>";
            echo "Age : ".$this->age."<br>";
            echo "Salary : ".$this->salary."<br>";
         }

    }

    class manager extends employee{
        public $ta = 500;
        public $phone =1000;
        public $totalSalary;

        
        function info(){
            $this->totalSalary = $this->salary + $this->ta + $this->phone;
            echo "<h3>Manager Profile</h3>";
            echo "Name : ".$this->name."<br>";
            echo "Age : ".$this->age."<br>";
            echo "Salary : ".$this->totalSalary."<br>";
         }
    }
    $e1 = new employee("Abid",25,25000);
    $e1->info();

    $m1 = new manager("Hasan",26,25000);
    $m1->info();
?>