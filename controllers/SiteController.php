<?php

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;

    class SiteController {

        function index (Request $request, Response $response, $args) {
            
            $classe = new Classe();
    
            $response->getBody()->write($classe -> toString());
            return $response;
        }

    }

?>