## 📚 iReview
iReview is a Laravel-based web application built as a portfolio project to demonstrate backend development skills using PHP and the Laravel framework.
The app allows users to browse books, shows, and movies, submit reviews, and rate them, showcasing CRUD operations, authentication, and MVC architecture.

--- 

## 🚀 Purpose
This project was created to demonstrate:
- Laravel MVC structure
- Authentication and authorization
- Database relationships
- RESTful routing
- Clean, maintainable PHP code
-- Real-world web application logic

---

## ✨ Features
- User registration and login (Laravel Auth)
- View list of books
- Book detail pages
- Create, edit, and delete reviews
- Book ratings
- Authorization (users can manage only their own reviews)
- Validation and error handling

---

## 🛠️ Tech Stack
- Framework: Laravel
- Language: PHP
- Database: MySQL / MariaDB
- Frontend: Blade, HTML, CSS, JavaScript
- Authentication: Laravel built-in auth
- ORM: Eloquent

---

## 📂 Project Structure
```bash
iReview/
├── app/
│   ├── Models/
│   ├── Http/Controllers/
├── database/
│   ├── migrations/
│   ├── seeders/
├── resources/
│   ├── views/
│   ├── css/
│   ├── js/
├── routes/
│   ├── web.php
├── public/
├── .env.example
├── composer.json
└── README.md
```

---

## ⚙️ Requirements
- PHP 8.1+
- Composer
- MySQL / MariaDB
- Node.js & npm (for frontend assets)
- Laravel 10+ (or your version)

## 🧑‍💻 Installation

### Clone the repository
```bash
git clone https://github.com/vanessa-isidro/iReview.git
cd iReview
```

### Install dependencies
```bash
composer install
npm install
npm run build
```

### Environment setup
```bash
cp .env.example .env
php artisan key:generate
```

### Configure database
Update .env:
```bash
DB_DATABASE=i_review
DB_USERNAME=root
DB_PASSWORD=secret
```

### Run migrations & seeders
```bash
php artisan migrate --seed
```

### Start the server
```bash
php artisan serve
```

### Open:
```bash
http://127.0.0.1:8000
```

---

## 🧪 Sample User Flow
1. Register or log in
1. Browse available books
1. Open a book’s detail page
1. Submit a review and rating
1. Edit or delete your own reviews

---

## 🔐 Authorization & Validation
- Users must be authenticated to write reviews
- Users can only edit/delete their own reviews
- Form requests are validated server-side

---

## 🧠 What This Project Demonstrates
- Laravel routing and controllers
- Eloquent relationships (Books ↔ Reviews ↔ Users)
- Blade templating
- Authentication & middleware
- Database migrations and seeders
- Clean and readable code practices

---

## 📄 License
This project is open-source and available under the MIT License.
