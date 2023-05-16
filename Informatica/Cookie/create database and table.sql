CREATE DATABASE login_db;

USE login_db;

CREATE TABLE utente
(
    id       INT AUTO_INCREMENT NOT NULL,
    email    VARCHAR(255)       NOT NULL,
    password VARCHAR(255)       NOT NULL,
    PRIMARY KEY (id)
);

INSERT INTO utente (email, password)
VALUES ('colo@colo.com', 'password');