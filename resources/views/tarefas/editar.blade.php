<x-layout>


    <div class="container">
        <div class="container-tarefas">  
            <h1>Editar Tarefa</h1>
            <form action="/tarefas/update/{{$tarefa->id}}" class="container-input" method="POST" >
                @csrf
                @method('PUT')
                <input type="text" name="tarefa" id="tarefa" value="{{$tarefa->tarefa}}">
                <button type="submit"><i class="bi bi-pencil"></i>Editar</button>
            </form>
        </div>
    </div>

</x-layout>