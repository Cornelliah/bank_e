CREATE DATABASE IF NOT EXISTS bank_e;
USE bank_e;


CREATE TABLE IF NOT EXISTS Administrateur 
(
    ID_admin INTEGER AUTO_INCREMENT,
    Email VARCHAR (255) NOT NULL,
    Mot_dp VARCHAR (255) NOT NULL,
    PRIMARY KEY (ID_admin)
)ENGINE=InnoDB;


CREATE TABLE IF NOT EXISTS Auteur 
(
    ID_Auteur INTEGER AUTO_INCREMENT,
    prenom_a VARCHAR (255) NOT NULL,
    nom_a VARCHAR (255) NOT NULL,
    PRIMARY KEY (ID_Auteur)
)ENGINE=InnoDB;



CREATE TABLE IF NOT EXISTS Document
(
    ID_Docu INTEGER AUTO_INCREMENT,
    ID_Auteur INTEGER ,
    ID_admin INTEGER ,
    Thème VARCHAR (255) NOT NULL,
    Titre VARCHAR (255) NOT NULL,
    Resume TEXT NOT NULL,
    Mot_clé VARCHAR (255) NOT NULL,
    PRIMARY KEY (ID_Docu),
    FOREIGN KEY (ID_admin) REFERENCES Administrateur(ID_admin),
    FOREIGN KEY (ID_Auteur) REFERENCES Auteur(ID_Auteur)
)ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS Doc_Aut 
(
    ID_Auteur INTEGER ,
    ID_Docu INTEGER,
    PRIMARY KEY (ID_Auteur, ID_Docu),
    FOREIGN KEY (ID_Auteur) REFERENCES Auteur(ID_Auteur),
    FOREIGN KEY (ID_Docu) REFERENCES Document(ID_Docu)
)ENGINE=InnoDB;
