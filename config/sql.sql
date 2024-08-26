-- SQL script to create the 'students' table

CREATE DATABASE IF NOT EXISTS peotef_university;

USE peotef_university;

CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    dob DATE NOT NULL,
    gender VARCHAR(10) NOT NULL,
    nationality VARCHAR(50) NOT NULL,
    id_number VARCHAR(50) NOT NULL,
    address VARCHAR(255) NOT NULL,
    contact_number VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    emergency_contact VARCHAR(255) NOT NULL,
    emergency_contact_number VARCHAR(50) NOT NULL,
    program VARCHAR(100) NOT NULL,
    department VARCHAR(100) NOT NULL,
    level VARCHAR(50) NOT NULL,
    academic_year VARCHAR(50) NOT NULL,
    previous_institution VARCHAR(255),
    referral VARCHAR(255),
    illness VARCHAR(10) NOT NULL,
    illness_details VARCHAR(255),
    medication VARCHAR(10) NOT NULL,
    medication_details VARCHAR(255)
);
