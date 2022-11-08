@props(['tarefa'])

<div class="tarefa mt-5">
    <p>{{$tarefa->tarefa}}</p>
    <div class="btn-tarefas">
        <a href="/tarefas/editar/{{$tarefa->id}}"><i class="bi bi-pencil"></i></a>
        <form action="/tarefas/delete/{{$tarefa->id}}" method="Post">
            @csrf
            @method('DELETE')
            <button type="submit"><i class="bi bi-trash3"></i></button>
        </form>
        
    </div>
</div>