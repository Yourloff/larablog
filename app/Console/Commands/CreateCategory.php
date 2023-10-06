<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;

class CreateCategory extends Command
{
    protected $signature = 'blog:create-category';

    protected $description = 'Создайте категорию';

    public function handle()
    {
        $name = $this->ask('Введите название категории');

        $category = new Category();
        $category->name = $name;

        $category->save();

        $this->info('Категория успешно создана!');
    }
}
