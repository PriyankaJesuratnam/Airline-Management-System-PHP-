# Airlanka Airlines Management System

Airlanka Airlines is a comprehensive web application designed for managing airline operations. Developed using PHP and CSS, and utilizing a MySQL database, this system facilitates both user and admin interactions. Users can view and book air tickets online, while admins can manage bookings and flight schedules.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Database Structure](#database-structure)
- [Contributing](#contributing)
- [License](#license)

## Features

### User Side
- **View Flights**: Browse available flights based on destination and date.
- **Book Tickets**: Reserve seats on flights.
- **View Bookings**: See a list of booked tickets.
- **Download Tickets**: Get electronic versions of booked tickets.

### Admin Side
- **Manage Flights**: Add, update, and delete flight details.
- **Manage Bookings**: View and manage user bookings.
- **View Reports**: Generate reports on bookings and flights.

## Technologies Used

- **Frontend**: HTML, CSS
- **Backend**: PHP
- **Database**: MySQL

## Installation

1. **Clone the repository:**
    ```sh
    git clone https://github.com/yourusername/airlanka-airlines.git
    ```
2. **Navigate to the project directory:**
    ```sh
    cd airlanka-airlines
    ```
3. **Setup the database:**
    - Create a MySQL database.
    - Import the `database.sql` file located in the `db` folder to your MySQL database.
4. **Configure the database connection:**
    - Edit the `config.php` file with your database credentials.

    ```php
    <?php
    define('DB_SERVER', 'your_server');
    define('DB_USERNAME', 'your_username');
    define('DB_PASSWORD', 'your_password');
    define('DB_DATABASE', 'your_database');
    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
    ?>
    ```
5. **Run the application:**
    - Place the project files in your web server's root directory (e.g., `htdocs` for XAMPP).
    - Start your web server and navigate to `http://localhost/airlanka-airlines`.

## Usage

### User Side

1. **Register/Login:**
    - Users can register for an account or log in using existing credentials.
2. **Book Tickets:**
    - Search for flights based on criteria such as destination and date.
    - Select a flight and proceed to book tickets.
3. **View/Download Tickets:**
    - Access the list of booked tickets and download them.

### Admin Side

1. **Login:**
    - Admins log in using admin credentials.
2. **Manage Flights:**
    - Add new flights, update existing flight details, or remove flights.
3. **Manage Bookings:**
    - View user bookings and manage them accordingly.
4. **Generate Reports:**
    - View reports on flights and bookings for analysis.

## Database Structure

The database consists of the following tables:

- **Users**: Stores user information.
- **Flights**: Stores flight details.
- **Bookings**: Stores booking information.
- **Admins**: Stores admin credentials.

## Contributing

1. Fork the repository.
2. Create your feature branch (`git checkout -b feature/AmazingFeature`).
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`).
4. Push to the branch (`git push origin feature/AmazingFeature`).
5. Open a Pull Request.

