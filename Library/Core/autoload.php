<?php

$controllerFile = 'Controllers/'.$controller.'.php';

if(file_exists($controllerFile))
{
    require_once($controllerFile);
    $controller = new $controller();

    if(method_exists($controller, $method))
    {
        $controller->{$method}($params);
    }

}else
{
    echo 'No se encuentra la página<br>';
}


?>