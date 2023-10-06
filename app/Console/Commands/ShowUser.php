<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class ShowUser extends Command
{
    protected $signature = 'user:show {id}';

    protected $description = 'Отобразить пользователя';

    public function handle()
    {
        $userId = $this->argument('id');
        $user = User::find($userId);

        if (!$user) {
            $this->error('Пользователь не найден!');
            return;
        }

        $this->info('Сведения о пользователе:');
        $this->line('ID: ' . $user->id);
        $this->line('Имя: ' . $user->name);
        $this->line('Email: ' . $user->email);
    }
}
