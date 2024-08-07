# iStore README

## Introduction

Welcome to the iStore repository! This is a Laravel-based application designed to online store posts and showcase their products.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- **PHP**: >= 8.0
- **Laravel**: >= 10.x
- **Composer**: >= 2.0
- **MySQL**: >= 5.7 or compatible database
- **Node.js**: >= 16.x (for front-end assets)
- **Git**: For version control

## Installation

Follow these steps to get the project up and running on your local machine:

1. **Clone the Repository**

   ```bash
   git clone https://github.com/mekdi1610/iStore.git
   cd iStore
   ```

2. **Install PHP Dependencies**

   ```bash
   composer install
   ```

3. **Install JavaScript Dependencies**

   ```bash
   npm install
   ```

4. **Set Up Environment File**

   Copy the example environment file and adjust settings as needed:

   ```bash
   cp .env.example .env
   ```

5. **Generate Application Key**

   ```bash
   php artisan key:generate
   ```

6. **Run Migrations**

   Set up the database and run migrations to create the necessary tables:

   ```bash
   php artisan migrate
   ```

7. **Seed the Database (Optional)**

   Seed the database with initial data (if applicable):

   ```bash
   php artisan db:seed
   ```

8. **Compile Front-end Assets**

   Build and compile JavaScript and CSS assets:

   ```bash
   npm run dev
   ```

## Configuration

Configure your application by editing the `.env` file:

- **Database Connection**

  ```env
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=your_database
  DB_USERNAME=your_username
  DB_PASSWORD=your_password
  ```

## Usage

To start the development server, run:

```bash
php artisan serve
```

Access the application in your browser at `http://localhost:8000`.

For the front-end, you can use:

```bash
npm run dev
```

This will compile and watch for changes in your front-end assets.

## Testing

Run tests using PHPUnit:

```bash
php artisan test
```
