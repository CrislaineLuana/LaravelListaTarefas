<h1 align="center"> 
    <img src="./public/img/logo.png">
    <p>To-do List - Laravel 📑</p>
</h1>

## 📕 About

This project enables you to manage your **daily tasks**. It is possible to create an account and store all your tasks. As it also has an **authentication** system for the security of your data.


## 🔨 Tools

- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)


## 🤗 How Contribute

```bash
    # Clone the project
    $ git clone https://github.com/CrislaineLuana/LaravelListaTarefas.git
```

```bash
    # Enter directory
    $ cd LaravelListaTarefas
```

```bash
    # Install dependencies
    $ composer install
```

```bash
    # Copy .env.exemple to .env
    $ php -r "copy('.env.example', '.env');"
```

```bash
    # Generate artisan key
    $ php artisan key:generate
```

```bash
    # Update the database info in .env directory with your connection
```
 <img src="./public/readme/.envBanco.png">


 ```bash
    # Make a migration
    $ php artisan migrate
```

 ```bash
    # Run the project
    $ php artisan serve
```

## 📃 License 
This project is under the MIT license. See the file [LICENSE](./LICENSE.TXT) for more details.