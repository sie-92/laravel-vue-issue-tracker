# Laravel + Vue Issue Tracker

A full-stack issue tracker using Laravel for backend and Vue 3 for frontend.

## Features
- User authentication
- Create, update, delete issues
- Track issue status

## Tech Stack
- Laravel 10 (Sanctum for auth)
- Vue 3 (Vite)
- Axios
- Pinia (optional)

## Installation

### Backend
```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

### Frontend
```bash
cd frontend
npm install
npm run dev
```

Make sure CORS and sanctum are configured correctly.

## Author
[sie-92](https://github.com/sie-92)
