<?php
/**
 * Copyright (C) Alibaba Cloud Computing
 * All rights reserved
 */

$version = '0.7.0';


function classLoader($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = __DIR__ . DIRECTORY_SEPARATOR . 'Aliyun' . DIRECTORY_SEPARATOR . 'Log' . DIRECTORY_SEPARATOR . $path . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

spl_autoload_register('classLoader');

