CREATE DATABASE pw3_api;

USE pw3_api;

CREATE TABLE tb_user (
	cd INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(80) NOT NULL,
	email VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL
);
