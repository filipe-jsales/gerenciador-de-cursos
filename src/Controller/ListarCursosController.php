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
        ?>
        <html lang="pt-BR">
            <head>
                <meta charset="UTF-8">
                <title>Document</title>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            </head>
            <body>
                <div class="container">
                    <div class="jumbotron">
                        <h1>Listar cursos</h1>
                    </div>
                    <button class="btn btn-primary">Salvar</button>

                    <a href="/novo-curso" class="btn btn-primary">
                        Novo Curso
                    </a>


                    <ul class="list-group">
                        <?php foreach ($cursos as $curso): ?>
                            <li class="list-group-item">
                                <?= $curso->getDescricao(); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </body>
        </html>
        <?php
    }
}