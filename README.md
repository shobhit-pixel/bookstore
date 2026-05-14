📚 Bookstore Management System

A complete online bookstore platform built with PHP, MySQL, JavaScript, AJAX, and Stripe payment integration. The project includes a customer storefront, shopping cart, authentication system, admin dashboard, category management, and secure online payment processing.


---

🚀 Features

👤 User Features

User Registration & Login

Browse Books by Categories

Add to Cart & Wishlist

Secure Checkout Process

Stripe Payment Integration

PDF Book Delivery via Email

Order Management

Responsive Storefront UI


🔐 Admin Features

Admin Authentication

Product Management

Category Management

Order Tracking

Book Upload & PDF Management

Dashboard Controls



---

🛠️ Tech Stack

Technology	Usage

PHP	Backend Development
MySQL	Database
JavaScript	Frontend Interactions
AJAX	Dynamic Cart Updates
Stripe API	Online Payments
PHPMailer	Email Delivery
HTML/CSS	UI Design



---

📂 Project Structure

bookstore/
│
├── admin-panel/
├── auth/
├── shopping/
├── includes/
├── config/
├── assets/
├── SQL_FILE/
└── index.php


---

🔑 System Constants

Constant	Description

APPURL	Base URL of frontend
ADMINURL	Base URL of admin panel
IMGURL	Product image directory



---

🗄️ Database Entities

products

Stores all digital books.

Fields:

file → PDF filename

status → Product visibility flag

category_id → Book category reference


cart

Temporary cart items before checkout.

Fields:

pro_amount

pro_file


orders

Stores successful Stripe transactions.

Fields:

token

price



---

🔐 Authentication System

Session Variables

Variable	Purpose

$_SESSION['username']	Customer session
$_SESSION['user_id']	User identifier
$_SESSION['adminname']	Admin session
$_SESSION['admin_id']	Admin identifier


Auth Guards

Frontend Guard

if(!isset($_SESSION['username']))

Admin Guard

if(!isset($_SESSION['adminname']))


---

💳 Stripe Payment Integration

The application uses Stripe for secure payment processing.

Payment Flow

1. Frontend generates Stripe token.


2. Backend processes payment using Stripe Charge API.


3. Order details stored in database.


4. Purchased PDF delivered via email.




---

📧 PHPMailer Integration

PHPMailer is used for sending purchased PDF books directly to customers through SMTP email delivery.


---

⚡ AJAX Features

AJAX is used for dynamic shopping cart operations.

AJAX Endpoints

Endpoint	Function

shopping/update-item.php	Update cart quantity
shopping/delete-item.php	Remove cart item



---

📥 Installation

1. Clone Repository

git clone https://github.com/shobhit-pixel/bookstore.git

2. Move Project

Place project inside XAMPP htdocs folder.

C:/xampp/htdocs/bookstore

3. Import Database

Open phpMyAdmin

Create database

Import:


SQL_FILE/Bookstore.sql

4. Configure Environment

Update:

config/config.php

Add:

Database credentials

Stripe Secret Key

Base URLs


5. Run Project

http://localhost/bookstore


---

📸 Modules Included

Frontend Storefront

Shopping Cart

Wishlist

User Authentication

Admin Dashboard

Category Management

Product Management

Stripe Payments

Email Delivery System



---

🔒 Security Features

Session-based authentication

Admin route protection

Stripe secure payment gateway

Password verification

Secure checkout flow



---

📈 Future Improvements

JWT Authentication

React Frontend

Advanced Search

AI Book Recommendation

Multi-vendor Support

Order Analytics Dashboard



---

👨‍💻 Author

Shobhit Tripathi

GitHub: https://github.com/shobhit-pixel


---

⭐ Support

If you like this project, give it a ⭐ on GitHub.
