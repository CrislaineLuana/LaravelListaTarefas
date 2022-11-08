
<x-layout>

   

    <div class="base-container">          
        <div class="container-tarefas">
            @include('partials._search')
                <div class="container-input mt-5">   
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