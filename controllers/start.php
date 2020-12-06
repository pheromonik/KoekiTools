<?php

class start
{
    public static function run()
    {
        echo "Test";
        $db = new toolsDb();
        $value = $db->getArray('SELECT * FROM TESTTABELLE');
        echo $value[0][0];
    }
}