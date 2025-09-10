-- Create database (if not exists)
CREATE DATABASE registration;

-- Use the database
USE registration;

-- Table 1: users
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES (NULL, 'Admin', 'admin', current_timestamp());


-- Table 2: Students
CREATE TABLE students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    enrollment_number VARCHAR(20) UNIQUE NOT NULL,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    date_of_birth DATE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    phone VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table 3: Marks
CREATE TABLE marks (
    mark_id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    subject VARCHAR(100) NOT NULL,
    marks INT CHECK (marks BETWEEN 0 AND 100),
    FOREIGN KEY (student_id) REFERENCES students(student_id) ON DELETE CASCADE
);

-- Insert a sample student (Prabhat)
INSERT INTO students (enrollment_number, first_name, last_name, date_of_birth, email, phone)
VALUES ('1009', 'Prabhat', 'Kumar', '1990-09-09', 'prabhat.kumar@syllogossystems.com', '+91 8087212840');

-- Insert marks for Prabhat (assuming his student_id = 1)
INSERT INTO marks (student_id, subject, marks) VALUES
(1, 'Data Structures', 85),
(1, 'DBMS', 90),
(1, 'Operating Systems', 78),
(1, 'Web Technologies', 88);
