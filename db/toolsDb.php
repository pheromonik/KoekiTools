<?php

class toolsDb
{
    /**
     * @var PDO
     */
    private static $dbInstance = null;

    public function __construct()
    {
        $this->initDb();
    }

    public function initDb()
    {
        if (self::$dbInstance === null) {
            $dsn = 'mysql:dbname=web133_tools;host=localhost';
            $user = 'web133_tools';
            $password = 'Gvoc?301';
            try {
                self::$dbInstance = new PDO($dsn, $user, $password);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
        }
    }

    public function getPDO()
    {
        $this->initDb();
        return self::$dbInstance;
    }

    public function getArray($sql)
    {
        return $this->getPDO()->query($sql)->fetchAll();
    }

//$db = new toolsDb();
//$value = $db->getArray('SELECT * FROM TestTabelle');
//echo $value[0][0];
}