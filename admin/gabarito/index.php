<?php
    include "../layout/cabecalho.php";
    require "../../model/Gabarito.php";

    $gb = new Gabarito();
    $gabaritos = $gb->listarTodos();
?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
            <h1 class="h2">Gabaritos</h1>
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
                        <th>Disciplina</th>
                        <th>Curso</th>
                        <th>Periodo</th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                <?php if ($gabaritos): ?>
                    <?php foreach ($gabaritos as $gabarito): ?>
                    <tr>
                        <td><?php echo $gabarito['id'] ?></td>
                        <td><?php echo $gabarito['nome'] ?></td>
                        <td><?php echo $gabarito['disciplina'] ?></td>
                        <td><?php echo $gabarito['curso'] ?></td>
                        <td><?php echo $gabarito['periodo'] ?></td>
                        <td>
                            <a href="download.php?id=<?php echo $gabarito['id'] ?>" class="btn btn-primary btn-sm">Download</a>
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