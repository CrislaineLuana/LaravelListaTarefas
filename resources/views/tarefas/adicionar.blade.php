<x-layout>
    <div class="base-container">
        <div class="container-tarefas">
            <h1>Adicionar Tarefa</h1>
            <form action="/tarefas/create" method="POST" class="container-input">   
                @csrf
                <input type="text" name="tarefa" style="width: 500px" placeholder="Digite sua tarefa...">
                <button type="submit" style="font-size: 11px"> <i class="bi bi-plus-circle-fill"></i>Adicionar</button>
            </form>
            <p style="color: white; margin-top:10px">Não deseja mais adicionar uma tarefa? <a href="/index" style="color: rgb(97, 97, 241)">Voltar para Home</a> </p>
        </div>
    </div>
</x-layout>