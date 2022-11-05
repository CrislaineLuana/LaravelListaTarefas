
<x-layout>
    <div class="container">    
        <div class="container-tarefas">
            <h1>Lista de tarefas 2000</h1>
            <div class="container-input">
                <input type="text" placeholder="Digite sua tarefa...">
                <button> <i class="bi bi-plus-circle-fill"></i>Adicionar</button>
            </div>
            <div class="container-lista-tarefas">
                <div class="tarefa">
                    <p>Estudar JS</p>
                    <div class="btn-tarefas">
                        <a href="/editar.html"><i class="bi bi-pencil"></i></a>
                        <form action="/excluir.html">
                            <button type="submit"><i class="bi bi-trash3"></i></button>
                        </form>
                        
                    </div>
                </div>
                <div class="tarefa">
                    <p>Estudar JS</p>
                    <div class="btn-tarefas">
                        <a href="/editar.html"><i class="bi bi-pencil"></i></a>
                        <form action="/excluir.html">
                            <button type="submit"><i class="bi bi-trash3"></i></button>
                        </form>
                        
                    </div>
                </div>    
                            
            </div>
        </div>
    </div>
</x-layout>