<h1 align="center">Community Portal</h1>
<p align="center">
  <b>Content platform with news, FAQ and user profiles</b><br/>
  A Laravel application with a news section, categorized FAQ, public user profiles, a contact form and an authenticated dashboard.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-11-FF2D20?style=flat-square&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP-8.2-777BB4?style=flat-square&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/Blade-templates-F05340?style=flat-square" />
  <img src="https://img.shields.io/badge/Breeze-auth-FF2D20?style=flat-square&logo=laravel&logoColor=white" />
</p>

---

## Features

- **News** — full CRUD for articles, plus a latest-news page.
- **FAQ** — questions grouped by category, both manageable.
- **Profiles** — public user profiles with editable details.
- **Contact** — contact form with stored messages and an overview to manage them.
- **Authentication** — registration, login and account settings.
- **Dashboard** — personal area after login.

## Tech stack

| Layer | Technology |
|---|---|
| Backend | Laravel 11, PHP 8.2 |
| Frontend | Blade, Vite |
| Auth | Laravel Breeze |

## Getting started

```bash
git clone https://github.com/oiseaubleuc/porsche.git
cd porsche
composer install
npm install && npm run build
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

---

<p align="center">Built by <a href="https://github.com/oiseaubleuc">Hoho</a> · Belgium</p>
