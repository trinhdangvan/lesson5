<?php
class A{
    public $some_property;

    function some_method(){
        echo "Phương thức này được định nghĩa bên trong lớp A";
    }
}
class B extends A
{
    public $some_other_property;

    function some_other_method()
    {

    }
}
$b = new B  ();
$b->some_property = 'Hello';
$b->some_method();
$b->some_other_property = 'World';
$b->some_other_method();