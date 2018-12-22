<h1>Tarefas</h1>
<hr>
<div class="container">
    <table class="table table-bordered table-striped" style="top:50px;">
        <thead>
            <tr>
                <th>Nome</th>
                <th>descricao</th>
                <th>prazo</th>
                <th>prioridade</th>
                <th>concluida</th>
                <th><a href="?controller=tarefasController&method=criar" class="btn btn-success btn-sm">Novo</a></th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($tarefas) {
                foreach ($tarefas as $Tarefa) {
                    ?>
                    <tr>
                        <td><?php echo $Tarefa->nome; ?></td>
                        <td><?php echo $Tarefa->descricao; ?></td>
                        <td><?php echo $Tarefa->prazo; ?></td>
                        <td><?php echo $Tarefa->prioridade; ?></td>
                        <td><?php echo $Tarefa->concluida; ?></td>
                        <td>
                            <a href="?controller=tarefasController&method=editar&id=<?php echo $Tarefa->id; ?>" class="btn btn-primary btn-sm">Editar</a>
                            <a href="?controller=tarefasController&method=excluir&id=<?php echo $Tarefa->id; ?>" class="btn btn-danger btn-sm">Excluir</a>
                        </td>
                    </tr>
                    <?php
                }
            } else {
                ?>
                <tr>
                    <td colspan="5">Não há tarefas</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>
