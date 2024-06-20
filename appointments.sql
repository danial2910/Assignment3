CREATE DATABASE appointment_db;

USE appointment_db;

CREATE TABLE appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    counselor VARCHAR(255) NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,
    student_name VARCHAR(255) NOT NULL,
    student_email VARCHAR(255) NOT NULL
);
