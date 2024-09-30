# Customer Inventory Management App

A simple inventory management system built using PHP, Laravel, and MySQL, providing features like CRUD (Create, Read, Update, Delete) operations, user login, and registration.

## Features

- User Registration and Login
- Add, Edit, View, and Delete inventory items
- Manage inventory for each registered user
- Secure authentication using Laravel

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/Arafat-Hossain-Anik/customer-inventory
   cd customer-inventory
   ```

2. **Install dependencies**
   ```bash
   composer install
   ```

3. **Set up environment**
   - Copy `.env.example` to `.env`
   - Configure the database and other settings in the `.env` file

4. **Generate application key**
   ```bash
   php artisan key:generate
   ```

5. **Migrate the database**
   ```bash
   php artisan migrate
   ```

6. **Run the application**
   ```bash
   php artisan serve
   ```

7. **Access the app**
   - Open your browser and go to `http://localhost:8000`

## Usage

- Register or log in to manage your inventory.
- Use the simple interface to add, view, edit, and delete items in your inventory.
