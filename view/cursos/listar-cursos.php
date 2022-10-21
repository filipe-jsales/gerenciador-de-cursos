<?php $titulo = 'Lista de Cursos'; include __DIR__ . '/../../view/incio-html.php'?>

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
    
<?php include __DIR__ . '/../../view/fim-html.php'?>