<div class="container">
    <form action="?controller=tarefasController&<?php echo isset($Tarefa->id) ? "method=atualizar&id={$Tarefa->id}" : "method=salvar"; ?>" method="post" >
        <div class="card" style="top:60px">
            <div class="card-header">
                <span class="card-title">Tarefas</span>
            </div>
            <div class="card-body">
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">Nome:</label>
                <input type="text" class="form-control col-sm-8" name="nome" id="nome" value="<?php
                echo isset($Tarefa->nome) ? $Tarefa->nome : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">descricao:</label>
                <input type="text" class="form-control col-sm-8" name="descricao" id="descricao" value="<?php
                echo isset($Tarefa->descricao) ? $Tarefa->descricao : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">prazo:</label>
                <input type="text" class="form-control col-sm-8" name="prazo" id="prazo" value="<?php
                echo isset($Tarefa->prazo) ? $Tarefa->prazo : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">prioridade:</label>
                <input type="text" class="form-control col-sm-8" name="prioridade" id="prioridade" value="<?php
                echo isset($Tarefa->prioridade) ? $Tarefa->prioridade : null;
                ?>" />
            </div>
            <div class="form-group form-row">
                <label class="col-sm-2 col-form-label text-right">concluida:</label>
                <input type="text" class="form-control col-sm-8" name="concluida" id="concluida" value="<?php
                echo isset($Tarefa->concluida) ? $Tarefa->concluida : null;
                ?>" />
            </div>
            <div class="card-footer">
                <input type="hidden" name="id" id="id" value="<?php echo isset($Tarefa->id) ? $Tarefa->id : null; ?>" />
                <button class="btn btn-success" type="submit">Salvar</button>
                <a class="btn btn-danger" href="?controller=tarefasController&method=listar">Cancelar</a>
            </div>

        </div>
    </form>
</div>
