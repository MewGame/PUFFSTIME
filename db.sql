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

CREATE TABLE produits (
    id int PRIMARY KEY AUTO_INCREMENT,
    Nom varchar(200),
    prix float,
    quantité int,
    id_produits int
)

CREATE TABLE commandes (
    id int PRIMARY KEY AUTO_INCREMENT,
    id_clients int,
    id_produits int,
    quantité float
)