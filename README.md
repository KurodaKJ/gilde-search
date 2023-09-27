<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

[![laravel](https://github.com/KurodaKJ/gilde-search/actions/workflows/laravel.yml/badge.svg)](https://github.com/KurodaKJ/gilde-search/actions/workflows/laravel.yml) 

# Installation
Follow these steps to get the project up and running on your local machine.

## Prerequisites
Before you begin, make sure you have the following software installed on your computer:

- XAMPP (or similar,  such as Laragon)
- Git
- Code Editor

## Clone the Repository
Clone this repository to your local machine using Git or GitHub Desktop:

```
git clone https://github.com/KurodaKJ/gilde-search.git
```

## Install Dependencies
Install the project dependencies using Composer:

```
composer install
```

## Configuration
Copy the .env.example file to .env:

```
cp .env.example .env
```

## Generate Application Key (optional)
The php artisan key:generate command generates a new application key for your Laravel project. This key is used to encrypt sensitive data such as cookies, passwords, and session data.

To generate a new application key, simply run the following command in your terminal:
```
php artisan key:generate
```

## Clear Configuration Cache
After making changes to the configuration files, it's a good practice to clear the configuration cache:

```
php artisan config:clear
```

## Run Tests
To test the your project, simply run the following command in your terminal:

```
php artisan test
```

## Start the Application
Start the development server:

```
php artisan serve
```
