<?php

    /* 
 
 */

    require_once(__DIR__.'/vendor/autoload.php');

$generator = new OperationGenerator();
$generator -> $generateOperations(12);
$operations = $generator -> getAlloperations(12);

var_dump($generator->solve());

