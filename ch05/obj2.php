<?php
$object1 = new User;
$object1->name = "Alice";
$object2 = $object1;
$object2->name = "Amy";
$object3 = clone $object1;
$object3->name = "Anne";

echo "object name = " . $object1->name . "\n";
echo "object name = " . $object2->name . "\n";
echo "object name = " . $object3->name . "\n";

class User
{
    public $name;

    function get_password()
    {
        return $this->password;
    }
}

Translate::lookup();
echo "\n";

class Translate
{
    const ENGLISH = 0;
    const FRENCH = 1;
    const SPANISH = 2;
    const GERMAN = 3;

    static function lookup()
    {
        echo self::SPANISH;
    }
}

class Example
{
    var $name = "Michael";
    public $age = 23;
    protected $usercount;

    private function admin()
    {
        // Admin code goes here
    }
}
