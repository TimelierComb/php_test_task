DROP DATABASE IF EXISTS sport;

CREATE DATABASE sport
    DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;

USE sport;

CREATE TABLE sportsmans (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sportsman_name VARCHAR(128),
    email VARCHAR(128) UNIQUE,
    phone CHAR(11),
    birth_date DATE,
    age TINYINT,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    passport_number CHAR(10),
    mid_place INT,
    biography TEXT,
    videopresentaion VARCHAR(128)
);

CREATE TABLE results (
    id INT AUTO_INCREMENT PRIMARY KEY,
    competition_id INT,
    sportsman_id INT,
    result INT
);
