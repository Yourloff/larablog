<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Post;

class CreatePost extends Command
{
    protected $signature = 'blog:post:create';

    protected $description = 'Создайте новую запись';

    public function handle()
    {
        $title = $this->ask('Введите название публикации');
        $content = $this->ask('Введите содержание сообщения');
        $userId = $this->ask('Введите id пользователя');
        $categoryId = $this->ask('Введите id категории');

        $post = new Post();
        $post->title = $title;
        $post->content = $content;
        $post->user_id = $userId;
        $post->category_id = $categoryId;

        $post->save();

        $this->info('Пост успешно создан!');
    }
}
