<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


# Laravel Attendance Search Project

A simple and scalable Laravel-based system to manage internal and external user attendance, with dynamic search capability via email or phone. Authenticated using Laravel bootstrao ui.

## Features

- Used Laravel Auth Bootstrap Ui
- Laravel Migration
- Laravel Seeder 

## Requirements

- PHP >= 8.0
- Composer
- Laravel >= 12
- MySQL

## Installation

1. **Clone the repository**
- git clone git@github.com:ZhineSmathew/attendance-search-project.git
- cd attendance-search-project

2, **Environment setup**
- composer install
- npm install
- cp .env.example .env
- php artisan key:generate

### Tables

- `internal_users`: Contains internal staff user data.
- `external_users`: Linked to internal users with additional contact details.
- `attendances`: Tracks login/logout activity by mapping internal & external users.

3, **DB credentials**

    DB_DATABASE=attendences-search

4, **Migration**

    php artisan migrate.

5, **Seeder migration**
    php artisan db:seed

6, **project serve**
- php artisan serve
- npm run dev 

