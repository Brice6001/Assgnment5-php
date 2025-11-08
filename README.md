# Assgnment5-php
**Customer Registration System — PHP & MySQL CRUD**
Project Description

This project is a Customer Registration System built using PHP & MySQL. It demonstrates full CRUD functionality:

Create Customer

View Customer Records

(Edit & Delete can be added)

The system allows the user to register new customers and display them in a table.


**CRUD Operations**

Technologies Used
Technology	Purpose
PHP	Backend server logic
MySQL	Database
HTML	Front-end forms and views
phpMyAdmin	Database management
XAMPP / WAMP	Server environment
**Database Setup**
SQL to create database & table
CREATE DATABASE IF  customer_db;
USE customer_db;

CREATE TABLE  customers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20),
  address TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

**Folder Structure**
Assgnment5-php/db.php/add.php/index.php

**Features**

Add customer with name, email, phone & address

View customer list

Validates required fields

Stores data in MySQL database

 Screenshots Included

 Customer Form Page
 ![alt text](image-1.png)
 Customer List Output
![alt text](image-2.png)
 Database Table Screenshot
 ![alt text](image.png)



 