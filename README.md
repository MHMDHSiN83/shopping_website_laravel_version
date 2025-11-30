# 🛒 Laravel Shopping Website

A simple and clean e-commerce web application built with **Laravel**, demonstrating product listing, authentication, cart management, and the basic flow of an online shop.
This project was created as a practical exercise to learn Laravel’s MVC structure and backend development patterns.

---

## ⭐ Features Implemented

### 🔐 Authentication

* User registration & login
* Secure session-based authentication

### 🛍️ Shopping Functionality

* Product listing page
* Product categories
* Product details page
* Add to cart / remove from cart
* Cart page with full summary
* Simple order creation flow (demo)

### 🛠️ Admin Panel

* Add new products
* Edit existing products
* Delete products
* Category management
* Clean and separated admin views

### 📦 Laravel Core

* MVC structure with Controllers & Models
* Blade templating engine for UI
* Eloquent ORM for database operations
* Route handling with middleware
* Environment configuration using `.env`

---

## 🧰 Technologies Used

* **PHP**
* **Laravel** (version: [add version])
* **Blade** templating
* **MySQL** / your preferred DB
* **Composer**
* **npm** (optional, if assets exist)

---

## 🚀 Installation & Setup

### 1. Clone the repository

```bash
git clone https://github.com/MHMDHSiN83/shopping_website_laravel_version.git
cd shopping_website_laravel_version
```

### 2. Install backend dependencies

```bash
composer install
```

### 3. Install frontend dependencies (if applicable)

```bash
npm install
```

### 4. Create and configure `.env`

```bash
cp .env.example .env
```

Set your database credentials.

### 5. Generate app key

```bash
php artisan key:generate
```

### 6. Run migrations

```bash
php artisan migrate
```

### 7. Start the server

```bash
php artisan serve
```

Go to:

```
http://localhost:8000
```

---

## 📁 Project Structure (Important Folders)

```
app/                → Models, Controllers, Middleware
routes/web.php      → Main routes
resources/views/    → Blade templates (frontend + admin)
public/             → Public assets
database/migrations → Database schema files
```

---

## 📝 License

Created for educational and personal use.
Feel free to explore or use it as a reference.
