<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Instrucciones
## Back

- Clonar el repositorio y crear uno nuevo en su cuenta personal
- BACK: **NOTA** todos los servicios deben de manejarse por medio de una api
- Crear Servicios para login
- Crear un crud de airports con los siguientes campos: **name**, **code**, **city**
- Crear un crud de airlines con los siguientes campos: **name**, **code**
- Crear un crud de flights con los siguientes campos: **code**, **type**, **departure_id**, **destination_id**, **departure_time**, **arrival_time**, **airline_id**
- Relaciones De flights son: **departure_id** y **destination_id** a **airports** y **airline_id** a **airline**
- Para el campo **type** dentro Flights crear un **Enum** con los siguientes valores (PASSENGER, FREIGHT)
- Implementar **[Laravel Permision](https://spatie.be/docs/laravel-permission/v4/introduction)**
- Crear permisos de view, create, update, delete de cada modelo creado
- Crear dos roles, admin y operations
- Definir una Policy para Flights para manejar los permisos de view flights, view flight, create flight, update flight
- Asignar al rol de administrador por medio de un seeder, el permiso de view flight, create flight, update flight, delete flight
- Validar que solo un usuario con rol el administrador pueda ver y crear y editar flights

### Puntos extras:
- Implementar modelo polimórfico de Remarks (libre definición) y relacionar con modelos creados

## Front
- FRONT: Usar Vue para la lógica, (Se permite usar Bootstrap, Vuetify o Quasar para diseño)
- Implementar Login
- Implementar CRUD de Airports, consumiendo API de back
- Implementar CRUD de Airlines, consumiendo API de back
- Implementar CRUD de Flights, consumiendo API de back

### Puntos extras:
- Implementar modelo polimórfico de Remarks y relacionar con modelos creados


composer install
php artisan key:generate
php artisan migrate
php artisan db:seed
npm install
npm run dev

