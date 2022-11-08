<x-layout>
    <div class="base-container">
        <div class="container-tarefas">
                    <header class="text-center">
                        <h1 >Login</h1>
                        <p class="mb-4" style="color: white">Entre com sua conta do tarefas2000</p>
                    </header>

                    <form action="/users/authenticate" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="email" class="text-white inline-block text-lg mb-2">Email</label>
                            <input type="email" class="border border-gray-200 rounded   p-2 w-full" name="email"value="{{old('email')}}"/>
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label for="password" class="text-white inline-block text-lg mb-2">Senha</label>
                            <input type="password" class="border border-gray-200 rounded  p-2 w-full" name="password" />
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button type="submit" class="login-register-btn  text-white rounded py-2 px-4">Entrar</button>
                        </div>

                        <div class="mt-8">
                            <p class="text-white">
                                Não tem uma conta?
                                <a href="/register" style="color: rgb(67, 164, 243)" class="text-laravel">Cadastre-se</a>
                            </p>
                        </div>
                    </form>
        </div>
    </div>
</x-layout>