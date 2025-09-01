# Expense Tracker

A simple web app to track your expenses using PHP and MySQL.

## Features
- Add new expenses (title + amount)
- View all expenses
- Delete expenses

## Tech
- PHP
- MySQL
- HTML/CSS
- JavaScript

## Setup
1. Clone the repo:
   ```bash
   git clone https://github.com/YOUR_USERNAME/expense-tracker.git
Create a database expense_tracker.

Create expenses table:

sql
Kopiraj kod
CREATE TABLE expenses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
Update db.php with your DB credentials.

Open in browser: http://localhost/expense-tracker/
