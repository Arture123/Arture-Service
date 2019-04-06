# Arture-Service
Project for Arture Service of Core API

<p align = "center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Installing Component
- Make sure you are alredy install [Composer](https://getcomposer.org/) 
- If you want to update the component with ```Composer Update```

## Running Laravel
- To run the project use ```php artisan serve```

## L5 Swagger For Documentation
- Make sure alredy update component of laravel
- We use Swagger ver 3.0 
- The Source of Swagger Github [L5-Swagger](https://github.com/DarkaOnLine/L5-Swagger)
- The documentation of L5 Documentation in L5 Swagger [doc] (http://zircote.com/swagger-php/)
- The Example of Annotation in [OpenApi](https://github.com/DarkaOnLine/L5-Swagger/blob/master/tests/storage/annotations/OpenApi/Anotations.php)
- The Example of project with Annotation in [example](https://github.com/zircote/swagger-php/tree/master/Examples/petstore-3.0)
- Generate Swagger After Make Annotation ```php artisan l5-swagger:generate```
- Running Swagger ```127.0.0.1:8000/api/documentation```

##RESPONSE RULE
- The json output represent "Result", "Messsage", and "Status"
- For Example:

```{```
```    "status": "Success",```
```    "message": "The Data Has been Successfuly Retrieved",```
```    "result": [```
```        "data": [```
``` ```
```        ]```
```    ]```
```}```
