<?php

    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;

    class AlunniController {

        function alunni (Request $request, Response $response, $args) {
        
            $classe = new Classe();
    
            $response->getBody()->write($classe -> toString());
            return $response;
        }
    
    
    
        function search (Request $request, Response $response, $args) {
    
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
    
        }

    }

?>