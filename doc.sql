--creation de la base de donnee 
CREATE DATABASE nom_base;

--creation de la deuxieme table pour les inscription dans la base de donne
CREATE TABLE
    USER2 (
        id INT AUTO_INCREMENT NOT NULL primary KEY,
        nom VARCHAR(255) NOT NULL,
        prenom VARCHAR(255) NOT NULL,
        email VARCHAR(100) NOT NULL UNIQUE,
        PASSWORD VARCHAR(255) NOT null
    );

--insertion dans la table de la base
INSERT INTO
    USER2
VALUES
    (
        null,
        "votre_nom",
        "votre_prenom",
        "votre_email",
        "votre_mot_passe"
    );

--selection de tout les elements de la table

SELECT * FROM USER2;

--selection de tout les elements de la table avec un filtre

SELECT * FROM votre_table WHERE votre_variable = valeur;