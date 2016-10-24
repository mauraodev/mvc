<?php

namespace volt;

abstract class Bootstrap
{
    public function __construct() {
        
    }
    
    public function initRoutes()
    {
        
    }
    
    public function setRoutes()
    {
        
    }
    
    public function run($url)
    {
        
    }
    
    protected function getUrl()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

