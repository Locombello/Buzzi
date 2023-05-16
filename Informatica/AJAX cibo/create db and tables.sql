CREATE DATABASE ricette_db;

USE ricette_db;

CREATE TABLE ricetta
(
    id          INT AUTO_INCREMENT NOT NULL,
    nome        VARCHAR(255)       NOT NULL,
    ingredienti TEXT,
    PRIMARY KEY (id)
);

INSERT INTO ricetta (nome, ingredienti)
VALUES ('Pasta alla Carbonara', '350 grammi di spaghetti
150 grammi di pancetta affumicata
3 uova
75 grammi di pecorino romano grattugiato
Sale q.b.
Pepe nero q.b.'),
       ('Lasagna alla Bolognese', '250 grammi di lasagne all''uovo
300 grammi di carne macinata di manzo
200 grammi di salsiccia
1 cipolla
2 carote
2 coste di sedano
500 ml di passata di pomodoro
50 grammi di burro
50 grammi di farina
500 ml di latte
100 grammi di parmigiano reggiano grattugiato
Sale q.b.
Pepe q.b.
Noce moscata q.b.'),
       ('Tiramisù', '300 grammi di savoiardi (o biscotti tipo ladyfingers)
500 grammi di mascarpone
4 uova
100 grammi di zucchero
200 ml di caffè espresso raffreddato
Cacao in polvere q.b.');