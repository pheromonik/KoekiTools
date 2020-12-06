<?php

class start
{
    public function run()
    {
        $className = registry::getConfig()->getRequestParameter('cl');

        $output = '';
        try {
            $class = new $className();
            $functionName = registry::getConfig()->getRequestParameter('fnc');
            if ($functionName) {
                $class->$functionName();
            } else {
                $class->render();
            }

        } catch (Exception $exception) {
            $class = new BaseController();
            $output = $class->render();
        }
        echo $output;
    }
}