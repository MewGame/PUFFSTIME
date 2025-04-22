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

INSERT INTO produits(nom,prix) VALUES
("Puff Goût cherrycoca", 150),
("Puff Goût berry berry", 150),
("Puff Goût strawberry", 150),
("Puff Goût bluerazz", 150)