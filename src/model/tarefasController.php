<?php
class tarefasController extends Controller
{

    /**
     * Lista as tarefas
     */
    public function listar()
    {
        $tarefas = Tarefa::all();
        return $this->view('grade', ['tarefas' => $tarefas]);
    }

    /**
     * Cria uma nova tarefa
     */
    public function criar()
    {
        return $this->view('form');
    }

    /**
     *  Edita um Tarefa
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $Tarefa = Tarefa::find($id);

        return $this->view('form', ['Tarefa' => $Tarefa]);
    }

    /**
     * Salvar a Tarefa
     */
    public function salvar()
    {
        $Tarefa           = new Tarefa;
        $Tarefa->nome     = $this->request->nome;
        $Tarefa->descricao = $this->request->descricao;
        $Tarefa->prazo    = $this->request->prazo;
        $Tarefa->prioridade    = $this->request->prioridade;
        $Tarefa->concluida    = $this->request->concluida;

        if ($Tarefa->save()) {
            return $this->listar();
        }
    }

    /**
     * Atualizar a Tarefa conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $Tarefa           = Tarefa::find($id);
        $Tarefa->nome     = $this->request->nome;
        $Tarefa->descricao = $this->request->descricao;
        $Tarefa->prazo    = $this->request->prazo;
        $Tarefa->prioridade    = $this->request->prioridade;
        $Tarefa->concluida    = $this->request->concluida;
        $Tarefa->save();

        return $this->listar();
    }

    /**
     * Apagar uma Tarefa conforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $Tarefa = Tarefa::destroy($id);
        return $this->listar();
    }
}
