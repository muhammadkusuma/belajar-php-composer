<?php 
    require_once __DIR__. '/vendor/autoload.php';

    use BelajarPhpComposer\Data\people;

    $wira = new people("Wira");

    echo $wira->sayHello("Wira").PHP_EOL;
?>