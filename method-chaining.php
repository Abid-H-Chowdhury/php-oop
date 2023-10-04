<?php
// For Method Chaining  we need to use (return $this)
    class MethodChaining{ 
        public function first(){
            echo "this is first method<br>";
            return $this;
        }
        public function second(){
            echo "this is second method<br>";
            return $this;
        }
        public function third(){
            echo "this is third method<br>";
            return $this;
        }
    }
    $obj = new MethodChaining();
    $obj->first()->second()->third();
?>