# 🏫 School Management System

A complete **School Management System** built with **Laravel 10**, **Blade**, **JavaScript**, and **MySQL**. Manages students, teachers, classes, attendance, fees, exams, and results.

---

## 🛠 Tech Stack

| Layer       | Technology                    |
|-------------|-------------------------------|
| Frontend    | Blade, JavaScript, Tailwind CSS |
| Backend     | PHP Laravel 10                |
| Database    | MySQL                         |
| Authentication | Laravel Breeze              |

---

## 📋 Prerequisites

- PHP >= 8.1
- Composer
- Node.js >= 18 & npm
- MySQL >= 8.0
- Git

---

## 🔧 Quick Installation

```bash
# 1. Clone Repository
git clone https://github.com/ArmanHFahim/School-Management-System.git
cd School-Management-System

# 2. Install Dependencies
composer install
npm install

# 3. Environment Setup
cp .env.example .env
php artisan key:generate

# 4. Database Setup (Edit .env file first)
php artisan migrate --seed

# 5. Storage Link
php artisan storage:link

# 6. Build Assets & Start Server
npm run dev
php artisan serve
