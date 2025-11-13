-- Create the database if it doesn't exist
CREATE DATABASE IF NOT EXISTS student_enrollment;
USE student_enrollment;

-- Create students table if it doesn't exist
CREATE TABLE IF NOT EXISTS students (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(100),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Seed default data (only if table is empty)
INSERT INTO students (name, email)
SELECT * FROM (SELECT 'Khalid Hasan', 'khalidhasantalukder5@gmail.com') AS tmp
WHERE NOT EXISTS (SELECT 1 FROM students LIMIT 1);

INSERT INTO students (name, email)
SELECT * FROM (SELECT 'John Doe', 'john.doe@example.com') AS tmp
WHERE NOT EXISTS (SELECT 1 FROM students LIMIT 1);

INSERT INTO students (name, email)
SELECT * FROM (SELECT 'Jane Smith', 'jane.smith@example.com') AS tmp
WHERE NOT EXISTS (SELECT 1 FROM students LIMIT 1);
