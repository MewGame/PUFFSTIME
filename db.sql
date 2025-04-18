CREATE DATABASE PUFFSTIME;
use PUFFSTIME;
CREATE TABLE clients (
    id int PRIMARY KEY AUTO_INCREMENT,
    Nom varchar(100),
    Prenom varchar(100),
    Email varchar(100),
    Ville varchar(100),
    CP int,
    Tel int
)