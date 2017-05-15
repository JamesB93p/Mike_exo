CREATE DATABASE IF NOT EXISTS exercice_3;

USE exercice_3;

CREATE TABLE movies(
    id_film int(3) NOT NULL AUTO_INCREMENT,
    title VARCHAR(100) NOT NULL,
    actors VARCHAR(30) NOT NULL,
    director VARCHAR(30) NOT NULL,
    producer VARCHAR(30) NOT NULL,
    year_of_prod DATE NOT NULL,
    language VARCHAR(30) NOT NULL,
    category enum('horreur','action', 'drame thriller') NOT NULL,
    storyline text NOT NULL,
    video VARCHAR(100) NOT NULL,
    PRIMARY KEY (id_film)
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
