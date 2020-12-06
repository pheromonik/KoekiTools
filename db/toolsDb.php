<?php

class toolsDb
{
    /**
     * @var PDO
     */
    private static $dbInstance = null;

    public function getPDO(): PDO
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
        return self::$dbInstance;
    }

    public function getArray(string $sql): ?array
    {
        return $this->getPDO()->query($sql)->fetchAll();
    }
}