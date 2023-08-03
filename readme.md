
# Task Management Application

A basic task management application with user registration, login, and task management features.

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Database Configuration](#database-configuration)
- [License](#license)

## Introduction

This project is a minimal implementation of a task management application that allows users to register, login, create tasks, and manage them. It serves as a demonstration of basic web development concepts using HTML, PHP, CSS, and MySQL.

## Features

- User Registration: New users can create accounts with unique usernames and passwords.
- User Login: Registered users can log in to their accounts.
- Task Management: Users can create, update, and delete tasks.
- User Assignment: Users can assign tasks to other users.

## Installation

pre-req: download and install WAMP/XAAMP server for setting up local server.

1. Clone this repository or download the ZIP archive.

```bash
git clone https://github.com/your-username/task-management-app.git
```

2. Upload the contents of the `task-management-app` directory to your web server.

## Usage

1. Open your web browser and navigate to the URL where you uploaded the application.
2. Register a new account using the provided form.
3. Log in using your registered username and password.
4. Create tasks, update them, or delete them as needed.
5. Assign tasks to other users if desired.

## Database Configuration

The application uses a MySQL database to store user information and tasks. To configure the database, follow these steps:

1. Create a MySQL database using a tool like phpMyAdmin or the MySQL command line.
2. Modify the `db_config.php` file to provide your database host, username, password, and database name.
3. Import the `database.sql` file into your database to create the necessary tables.

**Note:** Make sure to secure your database credentials and follow best practices for database security.

## License

This project is licensed under the [MIT License](LICENSE).

---

Feel free to customize this README file to provide more detailed information about your project, such as deployment options, security considerations, and additional features.