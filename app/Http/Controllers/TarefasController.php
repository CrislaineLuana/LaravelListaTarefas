<?php

namespace App\Http\Controllers;
use App\Models\Tarefas;
use Illuminate\Http\Request;

class TarefasController extends Controller
{
    

    public function index(){
        return view('tarefas.index', ['listaTarefas' => auth()->user()->Tarefas()->latest()->filter(request(['search']))->Paginate(4)]);
    }

    public function edit(Tarefas $tarefas){
        return view('tarefas.editar', ['tarefa' => $tarefas]);
    }

    public function create(){
        return view('tarefas.adicionar');
    }

    public function store(Request $request){
        $formFields = $request->validate([
            'tarefa' => 'required'
        ]);
 
        $formFields['user_id'] = auth()->id();

        Tarefas::create($formFields);

        return redirect('/index')->with('message', 'Tarefa criada com sucesso!');

    }
    
    public function update(Request $request, Tarefas $tarefas){

        $formFields = $request->validate([
            'tarefa' => 'required'
        ]);

        $tarefas->update($formFields);

        return redirect('/index')->with('message', 'Tarefa atualizada com sucesso!');
 
    }

    public function delete(Tarefas $tarefas){
        Tarefas::destroy($tarefas->id);

        return redirect('/index')->with('message', 'Tarefa deletada com sucesso!');
    }


}
