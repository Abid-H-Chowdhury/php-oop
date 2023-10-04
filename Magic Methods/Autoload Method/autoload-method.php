<?php
     spl_autoload_register(function($class){
        require "AutoloadClasses/" . $class .".php";
    });

    $test = new second();
    $test2 = new first();
?>