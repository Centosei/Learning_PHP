<?php
$object = new Tiger();

echo "Tiger have...\n";
echo "Fur: " . $object->fur . "\n";
echo "Stripes: " . $object->stripes . "\n";

class Wildcat
{
    public $fur;

    function __construct()
    {
        $this->fur = "TRUE";
    }
}

class Tiger extends Wildcat
{
    public $stripes;

    function __construct()
    {
        parent::__construct();
        $this->stripes = "TRUE";
    }
}

class Finale
{
    final function copyright()
    {
        echo "This class was written by Centosei";
    }
}
