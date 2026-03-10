# Book & Author Management System

A simple Laravel backend API to manage Authors and their Books.

This project demonstrates CRUD operations, Eloquent relationships, and request validation using Laravel.

---

## Features

- CRUD operations for Authors
- CRUD operations for Books
- One-to-Many relationship (Author → Books)
- Request validation using Form Requests
- Clean RESTful API structure
- JSON API responses

---

## Tech Stack

- Laravel
- PHP
- MySQL
- REST API

---

## Setup Instructions

### 1 Clone Repository

git clone https://github.com/Hussain-pasha01/book-author-system.git

cd book-author-system

---

### 2 Install Dependencies

composer install

---

### 3 Setup Environment

Copy environment file

cp .env.example .env

Generate application key

php artisan key:generate

---

### 4 Configure Database

Update `.env`

DB_DATABASE=book_author_system  
DB_USERNAME=root  
DB_PASSWORD=

Create database in MySQL:

CREATE DATABASE book_author_system;

---

### 5 Run Migrations

php artisan migrate

---

### 6 Start Server

php artisan serve

Application will run at:

http://127.0.0.1:8000

---

## API Endpoints

### Authors

GET /api/authors  
POST /api/authors  
GET /api/authors/{id}  
PUT /api/authors/{id}  
DELETE /api/authors/{id}

---

### Books

GET /api/books  
POST /api/books  
GET /api/books/{id}  
PUT /api/books/{id}  
DELETE /api/books/{id}

---

## Example Request

Create Author

POST /api/authors

Body:

{
"name": "George Orwell",
"email": "orwell@test.com",
"bio": "English novelist"
}

---

Create Book

POST /api/books

Body:

{
"title": "1984",
"published_year": "1949",
"author_id": 1
}

---

## Author

Name: <Your Name>  
Date of Submission: <Date>  
Location: <Your Current Location>

---
