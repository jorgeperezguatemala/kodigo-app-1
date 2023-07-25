-- Active: 1689725721564@@127.0.0.1@3306@kodigo

USE kodigo;

SELECT * FROM bootcamps;

INSERT INTO bootcamps(title, description, start_bootcamp, end_bootcamp, modules)
VALUES("Desarrollo con JavaScript", "Aprende a ser programador en JS", "2023-07-20", "2023-09-30", 5);

INSERT INTO bootcamps(title, description, start_bootcamp, end_bootcamp, modules)
VALUES("Golang", "Aprende backend en golang", "2023-07-20", "2023-09-30", 10);

