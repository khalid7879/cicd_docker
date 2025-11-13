-- Create the database (only if it doesn't exist)
CREATE DATABASE IF NOT EXISTS student_enrollment;

USE student_enrollment;

-- Create the students table
CREATE TABLE IF NOT EXISTS students (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(100),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Optional: Insert some sample data
INSERT INTO students (name, email) VALUES
('Khalid Hasan', 'khalidhasantalukder5@gmail.com'),
('John Doe', 'john.doe@example.com'),
('Jane Smith', 'jane.smith@example.com');
