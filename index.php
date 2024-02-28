<?php

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Slim\Factory\AppFactory;

    require __DIR__ . '/vendor/autoload.php';

    spl_autoload_register(function($class){
        if(file_exists("./models/$class.php"))
            require_once("./models/$class.php");
    });


    $app = AppFactory::create();
    

    $app->get('/', function (Request $request, Response $response, $args) {
        $response->getBody()->write("Hello world!");
        return $response;
    });



    $app->get('/alunni', function (Request $request, Response $response, $args) {
        
        $classe = new Classe();

        $response->getBody()->write($classe -> toString());
        return $response;
    });



    $app->get('/alunni/{nome}', function (Request $request, Response $response, $args) {

        $classe = new Classe();
        $alunno = $classe->search($args['nome']);

        if($alunno) {

            $message = $alunno -> toString();
        }

        else {

            $message = "Alunno inesitente";
        }

        $response->getBody()->write($message);
        return $response;

    });

    $app->run();
