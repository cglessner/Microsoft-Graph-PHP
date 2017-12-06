# Microsoft Graph API example with PHP and Laravel

The example uses the Microsoft Graph Beta endpoint and shows items trending around me.
API refrence: https://developer.microsoft.com/en-us/graph/docs/api-reference/beta/beta-overview

## Prerequisites

node js, PHP > 7.0, Composer

## Create App in Azure AD

Reply url: http://localhost:8000/oauth

Graph Permission for '/me/insights/trending'
-Read items in all site collections (delegated)

## Config
Copy .env.example and rename the file to .env

Fill in AZURE_CLIENTID and AZURE_CLIENTSECRET in .env file 

## Build

Run: npm install
Run: Composer Install
Run: npm run dev

## Run
Run: php artisan serve
Open browser: http://localhost:8000

Enjoy :)

## What is laravel
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


