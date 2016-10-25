# Project steps

## configure database
```
.env

```

## generate auth
```
php artisan make:auth
php artisan migrate

```

## install entrust
```
composer require zizaco/entrust:5.2.x-dev
```

## change config/app.php
```
providers
    Zizaco\Entrust\EntrustServiceProvider::class,

alias
    'Entrust' => Zizaco\Entrust\EntrustFacade::class,
```

## change app/Http/Kernel.php
```
'role' => \Zizaco\Entrust\Middleware\EntrustRole::class,
'permission' => \Zizaco\Entrust\Middleware\EntrustPermission::class,
'ability' => \Zizaco\Entrust\Middleware\EntrustAbility::class,
```

## generate config/entrust.php
```
php artisan vendor:publish
```

## generate migration files
```
php artisan entrust:migration
php artisan migrate
```

## before or after generate entrust migration

* (before) change config/auth.php
    ```
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
            'table' => 'users',
        ],
    ]
    ```

* (after) change database/migrations/...entrust_setup_tables.php
    ```
    // From
    $table->foreign('user_id')->references('id')->on('')
    // To
    $table->foreign('user_id')->references('id')->on('users')
    ```

## make user seeder
```
php artisan make:seeder UsersTableSeeder
```

## change config/cache.php OR .env
CACHE_DRIVER=array

## install laravelcollective/html (FORM ONLY)
```
composer require "laravelcollective/html":"^5.2.0"
```

## change config/app.php
```
providers
    Collective\Html\HtmlServiceProvider::class,

alias
    'Form' => Collective\Html\FormFacade::class,
    'Html' => Collective\Html\HtmlFacade::class,
```

## create post resource
```
php artisan make:controller Admin/PostsController --resource

php artisan make:model Post -m

php artisan migrate
```

## install watson/bootstrap-form (REPLACE FORM ONLY WITH BOOTSTRAP)
```
composer require watson/bootstrap-form
```

## change config/app.php
```
providers
    Collective\Html\HtmlServiceProvider::class,
    Watson\BootstrapForm\BootstrapFormServiceProvider::class,
alias
    'Form'     => Collective\Html\FormFacade::class,
    'HTML'     => Collective\Html\HtmlFacade::class,
    'BootForm' => Watson\BootstrapForm\Facades\BootstrapForm::class,
```

## generate configure
```
php artisan vendor:publish
```
