# Expense Tracker

A simple Expense Tracker application built using PHP and MySQL.  
This project helps users add and view daily expenses in a simple interface.

---

# Features

- Add new expenses
- View all expenses
- Store data using MySQL database
- Simple and beginner-friendly UI

---

# Technologies Used

- PHP
- MySQL
- HTML
- CSS
- XAMPP

---

# Project Structure

```plaintext
expense-tracker/
│
├── index.php
├── db.php
├── style.css
└── README.md
```

---

# Database Setup

## Step 1: Create Database

Open phpMyAdmin and run the following SQL query:

```sql
CREATE DATABASE expense_tracker;

USE expense_tracker;

CREATE TABLE expenses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100),
    amount INT,
    category VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

# How to Run the Project

## Step 1

Install XAMPP.

## Step 2

Start:
- Apache
- MySQL

from XAMPP Control Panel.

## Step 3

Move the project folder to:

```plaintext
C:\xampp\htdocs\
```

## Step 4

Open browser and run:

```plaintext
http://localhost/expense-tracker
```

---

# Screenshots

## Home Page

Add screenshot here.

---

## Expense List

Add screenshot here.

---

## Database Table

Add screenshot here.

---

# Future Improvements

- Add delete expense feature
- Add edit expense feature
- Add monthly expense calculation
- Add login system

---

# Author

Shubham Kumar
