<?php
$object = new Son;
$object->test();
$object->test2();

class Dad
{
    function test()
    {
        echo "[Class Dad] I am your father\n";
    }
}

class Son extends Dad
{
    function test()
    {
        echo "[Class Son] I am Luke\n";
    }

    function test2()
    {
        parent::test();
        self::test();
    }
}
