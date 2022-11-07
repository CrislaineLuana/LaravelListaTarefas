
<x-layout>

   

    <div class="container">          
        <div class="container-tarefas">
            @include('partials._search')
            <h1>Lista de tarefas 2000</h1>
                <div class="container-input">   
                    <a href="/tarefas/adicionar" type="submit"> <i class="bi bi-plus-circle-fill"></i>Adicionar nova tarefa</a>
                </div>                               

            <div class="container-lista-tarefas">
                @foreach ($listaTarefas as $tarefa)
                    <x-card-tarefa :tarefa="$tarefa" />
                @endforeach
                                                    
            </div>
            <div class="mt-5 paginate" >
                {{$listaTarefas->links()}}
            </div>
        </div>

        
        
    </div>
</x-layout>