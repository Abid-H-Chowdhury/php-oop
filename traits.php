<?php
    trait parenttrait{
        public  $name;
        public function show(){
            echo "this is a trait";
        }
    }

    trait anotherparent{
        function msg(){
            echo "Hello ,This is another trait";
        }
    }
    class A{
     use parenttrait , anotherparent; 
    }
    class B{
     use parenttrait;
    }
    $obj = new A();
    $obj->show();
    echo "<br>";
    $obj->msg();
    
?>