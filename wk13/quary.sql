CREATE DATABASE mydb;
USE mydb;
DROP TABLE IF EXISTS 'Persons';
CREATE TABLE Persons (
    ID int NOT NULL,
    username varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    LastName varchar(255) NOT NULL,
    FirstName varchar(255),
    active int,
    PRIMARY KEY (ID)
);
INSERT INTO Persons (ID, username, email, LastName, FirstName,active) VALUES (1,'ArtemD','art@gmail.com','dryevov','artem',1);
INSERT INTO Persons (ID, username, email, LastName, FirstName,active) VALUES (2,'ElhamS','elh@gmail.com','salmanian','elham',1);
INSERT INTO Persons (ID, username, email, LastName, FirstName,active) VALUES (3,'PatrickPJ','pj@gmail.com','parreno','patrick',0);
INSERT INTO Persons (ID, username, email, LastName, FirstName,active) VALUES (4,'AsimP','asim@gmail.com','patel','asim',0);
INSERT INTO Persons (ID, username, email, LastName, FirstName,active) VALUES (5,'johnD','john@gmail.com','Doe','john',1);
INSERT INTO Persons (ID, username, email, LastName, FirstName,active) VALUES (6,'BenB','ben@gmail.com','Blanc','Ben',0);
