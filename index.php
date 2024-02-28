<?php

    use Slim\Factory\AppFactory;

    require __DIR__ . '/vendor/autoload.php';

    spl_autoload_register(function($class){
        
        if(file_exists("./models/$class.php"))
            require_once("./models/$class.php");

        else if(file_exists("./controllers/$class.php"))
            require_once("./controllers/$class.php");

    });


    $app = AppFactory::create();
    

    $app->get('/', 'SiteController:index');
    $app->get('/alunni', 'AlunniController:alunni');
    $app->get('/alunni/{nome}', 'AlunniController:search');

    $app->get('/api/alunni', 'ApiAlunniController:alunni');
    $app->get('/api/alunni/{nome}', 'ApiAlunniController:search');

    $app->run();

?>