<?php

namespace Alura\Cursos\Controller;
use \Alura\Cursos\Infra\EntityManagerCreator;

class ListarCursosController implements InterfaceControladorRequisicao
{
    private $repositorioDeCursos;

    public function __construct()
    {
        $entityManager = (new \Alura\Cursos\Infra\EntityManagerCreator())->getEntityManager();
        $this->repositorioDeCursos =  $entityManager->getRepository(\Alura\Cursos\Entity\Curso::class);    
    }

    public function processaRequisicao(): void {
        
        $cursos = $this->repositorioDeCursos->findAll();
        require __DIR__ . '/../../view/cursos/listar-cursos.php';
    }
}