<?php

class registry
{
    protected static $instances;

    /**
     * @return config
     */
    public static function getConfig()
    {
        return self::get(config::class);
    }

    public static function get($className)
    {
        if (!isset(self::$instances[$className])) {
            self::$instances[$className] = new $className();
        }
        return self::$instances[$className];
    }

    public static function set($className, $instance)
    {
        self::$instances[$className] = $instance;
    }
}
