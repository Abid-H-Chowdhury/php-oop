<?php
//Type ==========================================================> 1
    trait test{
        function hello_fun()
        {
            echo "This is a trait function";
        }
    }

    trait testsecond{
        function hello_fun()
        {
            echo "This is a testsecond function";
        }
    }
    class A{
        function hello_fun()
        {
            echo "This is a class A function";
        }
    }

    class B extends A{
        use test;
        function hello_fun()
        {
            echo "This is a class B function";    
    }
}
    $obj = new B();
    $obj->hello_fun();  //output : This is a class B function
    echo "<br>";

//Type ========================================================> 2

    class c extends A{
        use test;
}
    $obj2 = new c();
    $obj2->hello_fun();  //output : This is a trait function
    echo "<br>";

//Type =========================================================> 3

    class d {
        use test,testsecond{
            test::hello_fun insteadof testsecond;
            testsecond::hello_fun as new_hello_fun;  //rename method hello_fun to new_hello_fun
        }
    }

    $obj3 = new d();
    $obj3->hello_fun();  //output : This is a trait function
    $obj3->new_hello_fun();  //output : This is a testsecond function
    echo "<br>";

//Type =========================================================> 4

trait ThirdTest{
   private function add_fun()
    {
        echo "This is a private ThirdTest trait function";
    }
}
class e{
    use ThirdTest{
        ThirdTest::add_fun as public new_add_fun;      //private propertise can not access. Need to make public
    }                                     
}
$obj4 = new e();
// $obj4->add_fun();  //output : This is a private ThirdTest trait function
 $obj4->new_add_fun();  //output : This is a private ThirdTest trait function

echo "<br>";
?>