<?php
class A{
    function m(){
        echo 'This method is defined inside class A';
    }
}
class B extends A{
    function m(){
        echo 'This method is overrided by class B';
    }
}
$b = new B();
$b->m();

