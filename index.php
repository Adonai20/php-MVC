<?php
require_once('Config/config.php');

$url = !empty($_GET['url']) ? $_GET['url'] : 'Home/home';
$arrUrl = explode('/',$url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";

//Metodo 
if(!empty($arrUrl[1]))
{
    if($arrUrl[1] != "")
    {
        $method = $arrUrl[1];
    }
}

if(!empty($arrUrl[2]))
{
    if($arrUrl[2] !="")
    {
        for($i = 2; $i < count ($arrUrl); $i++ )
        {
            $params.= $arrUrl[$i].',';
        }
        $params = rtrim($params,',');
    }
}

//registrar CLASES
require_once('Library/Core/load.php');
//Auto Carga de las clases
require_once('Library/Core/autoload.php');








print_r($url);






?>