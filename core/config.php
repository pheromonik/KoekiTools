<?php

class config
{
    protected  $requestParameters = [];

    public function getRequestParameter($name)
    {
        if (!isset($this->requestParameters[$name])) {
            if (isset($_GET[$name])) {
                $this->requestParameters[$name] = $_GET[$name];
            } elseif (isset($_POST[$name])) {
                $this->requestParameters[$name] = $_POST[$name];
            }
        }
        return $this->requestParameters[$name];
    }
}