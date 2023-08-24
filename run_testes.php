<?php

include 'autoloader.php';

foreach (new DirectoryIterator(__DIR__) as $file)
{
    if(substr($file->getFilename(), -8) !== 'Test.php') {
        continue;
    }

    $classeName = substr($file->getFilename(), 0, -4);
    $testClass  = new $classeName();

    $methods = get_class_methods($testClass);
}