<?php
    class DestructMethod{
        public function __construct(){
            echo "This is a construct method<br>";
        }
        public function show(){
            echo "This is a show method<br>";
        }
        public function __destruct(){
            echo "This is a destruct method<br>";
        }
    }
    $obj = new  DestructMethod();
    $obj->show();
?>