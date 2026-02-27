# PHP MySQL CRUD System
A simple CRUD (Create, Read, Update, Delete) web application built with PHP and MySQL.

## Features
- View all users
- Add new user
- Edit existing user
- Delete user
- Auto ID resequencing after delete
- City field support

## Technologies Used
- PHP
- MySQL
- HTML & CSS
- Laragon (Local Server)

## Project Files
| File | Description |
|------|-------------|
| `VIEW.php` | Display all users with Edit & Delete actions |
| `INDEX.php` | Add new user form |
| `EDIT.php` | Edit/update user |
| `DELETE.php` | Delete user |
| `DB.php` | Database connection |

## Requirements
- Laragon installed
- PHP 8.0 or above
- MySQL 8.0 or above

## Database Setup
1. Open Laragon and start Apache and MySQL
2. Open HeidiSQL from Laragon
3. Connect to Laragon.MySQL
4. Open Query tab and run this:
```sql
CREATE DATABASE php_crud_db;
USE php_crud_db;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(20),
    age INT,
    city VARCHAR(100)
);
```

## How to Run
1. Install [Laragon](https://laragon.org/download)
2. Clone this repository into `C:\laragon\www\`
3. Start Apache and MySQL in Laragon
4. Open browser and go to:
```
localhost/php-mysql-crud-system/VIEW.php
```

## Video Tutorial
🎬 [Watch Project Demo on Google Drive](https://drive.google.com/file/d/1FMcQbNBr5nQOTFlHMjKjTD8nYmC0yv0d/view?usp=sharing)

## Changes & Updates

### ✅ Issues Fixed
| Issue | Fix Applied |
|-------|-------------|
| City showing 0 on update | Fixed `bind_param` from `"ssssii"` to `"sssssi"` |
| ID gap after delete (e.g. 5 then 7) | Added AUTO_INCREMENT resequencing query |
| AUTO_INCREMENT jumping to 13, 14 | Fixed with `ALTER TABLE users AUTO_INCREMENT = 1` |
| Table already exists error | Used `CREATE TABLE IF NOT EXISTS` |

### 🔧 Features Added
| Feature | Description |
|---------|-------------|
| Actions Column | Edit & Delete buttons added in user list table |
| Record Deleted Message | Alert shown after successful delete |
| Record Updated Message | Alert shown after successful update |
| City Field | Added city column in form, table display, and database |
| ID Resequencing | After delete, IDs reset to remove gaps |

