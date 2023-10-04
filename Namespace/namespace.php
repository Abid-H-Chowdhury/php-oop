<?php
    require 'student.php';
    require 'teacher.php';

    use pro\v1\command as cmmd;

    $obj1 = new testing\student();
    $obj2 = new cmmd\student();
?>