<?php

use Alura\Cursos\Controller\FormularioInsercao;
use Alura\Cursos\Controller\ListarCursosController;
require __DIR__ .  '/../vendor/autoload.php';

// fazer log de todas as requisições
switch ($_SERVER['PATH_INFO']) {
    case '/listar-cursos':
        $controlador = new ListarCursosController();
        $controlador->processaRequisicao();
        
        break;
    case '/novo-curso':
        $controlador_formulario = new FormularioInsercao();
        $controlador_formulario->processaRequisicao();
        break;
    default:
        echo "Erro 404";
        break;
}