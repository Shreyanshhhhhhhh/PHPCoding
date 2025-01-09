CREATE DATABASE bank_system;

USE bank_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    balance DECIMAL(10, 2) DEFAULT 0.00
);

INSERT INTO users (username, password, balance) 
VALUES ('testuser', 'password123', 500.00);
