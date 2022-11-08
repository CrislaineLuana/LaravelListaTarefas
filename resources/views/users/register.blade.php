<x-layout>
    <div class="base-container">
        <div class="container-tarefas">
                    <header class="text-center">
                        <h1>Cadastrar-se</h1>
                        <p class="mb-4 text-white">Crie uma conta no tarefas2000</p>
                    </header>

                    <form action="/users" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="inline-block text-white text-lg mb-2">Usuário</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="name" value="{{old('name')}}"/>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="email" class="inline-block text-white text-lg mb-2">Email</label>
                            <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}"/>                    
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" class="inline-block text-lg mb-2 text-white">Senha</label>
                            <input type="password" class="border border-gray-200 rounded p-2 w-full"name="password"/>
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password2" class="inline-block text-lg mb-2 text-white text-white">Confirmar Senha</label>
                            <input type="password"class="border border-gray-200 rounded p-2 w-full"name="password_confirmation"/>
                            @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button type="submit" class="login-register-btn bg-laravel text-white rounded py-2 px-4 hover:bg-black">Cadastrar-se</button>
                        </div>

                        <div class="mt-8 text-white">
                            <p>
                                Já tem uma conta? realize o
                                <a href="/" class="text-laravel" style="color: rgb(67, 164, 243)">Login</a>
                            </p>
                        </div>
                    </form>
        </div>
    </div >
</x-layout>