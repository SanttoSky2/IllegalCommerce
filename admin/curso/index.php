<?php
    include "../layout/cabecalho.php";
    require "../../model/Curso.php";

    $model = new Curso();
    $cursos = $model->listarTodos();
?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
            <h1 class="h2">Cursos</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="adicionar.php" class="btn btn-sm btn-outline-secondary">Adicionar</a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-md">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($cursos): ?>
                    <?php foreach ($cursos as $curso): ?>
                    <tr>
                        <td><?php echo $curso['id'] ?></td>
                        <td><?php echo $curso['nome'] ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $curso['id'] ?>" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">Nenhum gabarito foi registrado.</td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
    </main>
<?php include "../layout/rodape.php"; ?>