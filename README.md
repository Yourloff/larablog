# Сайт-блог

## Запуск проекта

> **Внимание**
> Обязательно сначала выполните требования.

Вот как вы можете запустить проект локально:

1. Клонировать этот репозиторий
    ```sh
    git clone https://github.com/Yourloff/larablog.git
    ```
1. Зайдите в корневой каталог проекта
    ```sh
    cd larablog
    ```

1. Скопируйте файл .env.example в файл .env.
    ```sh
    cp .env.example .env
    ```

1. Создайте базу данных larablog (вы можете изменить имя базы данных)

1. .env файл
    - установить данные базы данных (`DB_DATABASE=larablog`, `DB_USERNAME=root`, `DB_PASSWORD=`)

> Обязательно следуйте имени пользователя и паролю вашей базы данных.

1. Установите зависимости PHP
    ```sh
    composer install
    ```

1. Сгенерировать ключ
    ```sh
    php artisan key:generate
    ```

1. установить внешние зависимости
    ```sh
    npm install && npm run build
    ```

1. Запустить миграцию
    ```
    php artisan migrate
    ```

1. Запустить локальный сервер
    ```sh
    php artisan serve
    ``` 
