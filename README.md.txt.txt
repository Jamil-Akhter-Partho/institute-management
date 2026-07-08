# Institute Management System

A simple Laravel 12 based Institute Management System developed as a demonstration project. This project provides separate authentication for administrators and students, allowing administrators to manage courses and students while students can register, log in, browse available courses, and monitor their enrollment status.

---

## Project Overview

This project demonstrates the basic workflow of an educational institute management system.

### Student Module

- Student Registration
- Student Login
- Student Dashboard
- View Personal Information
- Browse Available Courses
- Buy Course (Demo)
- View Enrollment Status (Pending / Active)

### Admin Module

- Secure Admin Login
- Head Office Dashboard
- Add New Course
- View & Manage Courses
- View Registered Students
- Activate Student Enrollment
- View Branch Information

---

## Technology Stack

- Laravel 12
- PHP 8.3
- MySQL
- Blade Template Engine
- HTML5
- CSS3 (Plain CSS)
- Laragon Development Environment

---

## Project Structure

```
Institute Management System
│
├── Authentication
│     ├── Student Login
│     ├── Student Registration
│     └── Admin Login
│
├── Admin Panel
│     ├── Head Office Dashboard
│     ├── Course Management
│     ├── Student Management
│     └── Branch Management
│
└── Student Panel
      ├── Dashboard
      ├── Available Courses
      ├── Buy Course
      └── Enrollment Status
```

---

## User Roles

### Administrator

- Manage Courses
- View Students
- Activate Student Accounts
- View Branch Information

### Student

- Register
- Login
- View Dashboard
- Browse Courses
- Buy Courses (Demo)
- Check Enrollment Status

---

## Features

- Separate Authentication System
- Role-Based Access Control
- Course Management
- Student Registration
- Student Activation System
- Responsive Dashboard
- Simple and Clean User Interface

---

## Installation

Clone the repository

```bash
git clone <repository-url>
```

Navigate to the project

```bash
cd institute-management
```

Install dependencies

```bash
composer install
```

Copy environment file

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Configure the database inside the `.env` file.

Run migrations

```bash
php artisan migrate
```

Start the development server

```bash
php artisan serve
```

Open

```
http://127.0.0.1:8000
```

---

## Default Workflow

### Student

Register

↓

Login

↓

View Dashboard

↓

Browse Courses

↓

Buy Course (Demo)

↓

Wait for Admin Approval

↓

Enrollment Status becomes Active

---

### Administrator

Login

↓

Head Office Dashboard

↓

Manage Courses

↓

View Students

↓

Activate Student

---

## Future Improvements

- Branch CRUD
- Batch Management
- Group Management
- Course Categories
- Payment Gateway
- Student Profile Update
- Admin Reports
- Search & Filtering
- Attendance System
- Result Management

---

## Developer

**Developed by**

**Akhter, S. M. Jamil**

Bachelor of Science in Computer Science & Engineering

Email: *(jamilakhterp@gmail.com)*

GitHub: *(github.com/Jamil-Akhter-Partho)*

LinkedIn: *(https://www.linkedin.com/in/akhter-s-m-jamil-11b720268/)*

---

## License

This project was developed for educational and demonstration purposes.
