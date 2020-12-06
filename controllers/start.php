<?php

class start
{
    public function run()
    {
        $className = registry::getConfig()->getRequestParameter('cl');

        $output = '';
        try {
            if ($className) {
                $class = new $className();
                $functionName = registry::getConfig()->getRequestParameter('fnc');
                if ($functionName) {
                    $class->$functionName();
                } else {
                    $class->render();
                }
            } else {
                $class = new BaseController();
                $output = $class->render();
            }
        } catch (Exception $exception) {
            $class = new BaseController();
            $output = $class->render();
        }
        echo $output;
    }
}