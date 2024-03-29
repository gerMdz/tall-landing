# TALL Landing

## About TALL Landing

Es lo aprendido en un curso que describo en Learning Laravel.
Es para integrar distintos componentes de front y back
En este caso es una landing page para subscripciones.

## Documentación usada

[Tailwindcss](https://tailwindcss.com/docs/installation)

[Laravel](https://laravel.com/docs/8.x/installation)
[Alpinejs](https://alpinejs.dev/start-here)
[Alpinejs GitHub](https://github.com/alpinejs/alpine)




## Comandos

### Instalar
#### Laravel
```
composer create-project laravel/laravel carpeta-de-destino
```
#### Liveware and Breeze
```
composer require livewire/livewire
composer require laravel/breeze
php artisan breeze:install
```
#### Crear model (-m migración -f factory -c controller)
```
php artisan make:model Subscriber -mfc
```

#### Crea componente Livewire
```
php artisan make:livewire NombreComponente
```

#### Migrando database (:fresh borra datos anteriores --seed ejecuta los seeders )
```
php artisan migrate:fresh --seed
```
#### Interactuar con el sistema desde consola
```
php artisan tinker
```
##### Datos cargados
> Subscriber::all(); // Muestra todas las subscripciones
> Subscriber::factory()->create(); // Crea una nueva subscripción desde el factory

##### Alpine

x-data al principio de cada template.

x-show en donde se debería mostrar.

@clic en donde se debe hacer la acción

## Learning Laravel

Esto es parte de los cursos que imparte en Udemy [JuanDMGon](https://www.udemy.com/user/juandavidmezagonzlez/)

En este caso lo sigo en Laravel, otros los he seguido en Symfony aunque él lo enseñaba en Laravel.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

#### Next step
[Cap 28](https://www.udemy.com/course/stack-tall-tailwind-alpine-laravel-y-livewire/learn/lecture/24100648#questions/15135674)
