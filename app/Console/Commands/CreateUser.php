<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateUser extends Command
{
    protected $signature = 'blog:user:create';

    protected $description = 'Создайте нового пользователя';

    public function handle()
    {
        $name = $this->ask('Введите имя');
        $email = $this->ask('Введите email');
        $password = $this->secret('Введите пароль');

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

        $this->info('Пользователь успешно создан!');
    }
}
