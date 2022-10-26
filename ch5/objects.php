<?php

$object = new User;
// $temp = new User('name', 'password');
print_r($object);
// print_r($temp);

$object->name     = "Joe";
$object->password = "mypass";
print_r($object);

class User
{
    public $name, $password;

    function save_user()
    {
        echo "Save User code goes here";
    }
}
