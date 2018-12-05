<?php
/**
 * Created by PhpStorm.
 * User: wadii
 * Date: 28/11/2018
 * Time: 21:27
 */
function load($classe)
{
    $paths = array('', 'classe/', '');
    foreach ($paths as $path) {
        $finalPath = $path . $classe . ".php";
        if (file_exists($finalPath)) {
            require $finalPath;
            break;
        }
    }
}