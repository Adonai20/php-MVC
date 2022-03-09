<?php

spl_autoload_register(function($class)
{
    if(file_exists('Library/'.'Core/'.$class.'.php'))
    {
        require_once('Library/'.'Core/'.$class.'.php');
    }
});


?>