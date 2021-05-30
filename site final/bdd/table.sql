DROP DATABASE IF EXISTS museandsi;

CREATE DATABASE museandsi;

USE museandsi;

DROP TABLE IF Exists USER ;
DROP TABLE IF Exists POST ;
DROP TABLE IF Exists MUSIQUE ;


CREATE TABLE INSTRUMENT (

    Code_Instrument INTEGER AUTO_INCREMENT,
    Nom_Instrument varchar (50),
    Type_Instrument varchar(50),
    PRIMARY KEY (Code_Instrument)
);


CREATE TABLE TYPE_MUSIQUE (

    Code_Type_Musique INTEGER AUTO_INCREMENT,
    Nom_Type_Musique varchar (50),
    PRIMARY KEY (Code_Type_Musique)
);


CREATE TABLE GROUPE (

    ID_Groupe INTEGER AUTO_INCREMENT,
    Nom_Groupe varchar (50),
    PRIMARY KEY (ID_Groupe)
);

CREATE TABLE VILLE  (
    ID_Ville INTEGER AUTO_INCREMENT,
    Code_Postal INTEGER ,
    Nom_Ville VARCHAR(50),
    PRIMARY KEY (ID_Ville)
);

CREATE TABLE EVENEMENT (

    ID_Evenement INTEGER AUTO_INCREMENT,
    Nom_Evenement varchar (50),
    Descrtption_Evenement varchar (255),
    date_Evenement date,
    ID_Ville INTEGER,
    PRIMARY KEY (ID_Evenement),
    FOREIGN KEY (ID_Ville) REFERENCES VILLE(ID_Ville)
);

CREATE TABLE MUSIQUE (
                         ID_Musique INTEGER AUTO_INCREMENT,
                         NOM_Musique varchar(50),
                         TEMPS_Musique time,
                         ORIGINAL_Musique BOOLEAN,
                         CHEMIN_Musique varchar(255),
                         ID_Post INTEGER,
                         PRIMARY KEY (ID_Musique),
                         FOREIGN KEY (ID_Post) REFERENCES POST(ID_Post)

);

CREATE TABLE POST (

                      ID_Post INTEGER AUTO_INCREMENT,
                      CONTENU_POST text,
                      ID_Musique INTEGER,
                      PRIMARY KEY (ID_Post),
                      FOREIGN KEY (ID_Musique) REFERENCES MUSIQUE(ID_Musique)

);

CREATE TABLE USER(

    ID_User INTEGER AUTO_INCREMENT,
    MDP varchar (50),
    NOM_User varchar(50),
    PRENOM_User varchar(50),
    AGE_User INTEGER,
    ROLE_User varchar(50),
    Photo_Profil varchar(255),
    PRIMARY KEY (ID_User)
);

CREATE TABLE FOLLOW(
    ID_User INTEGER,
    ID_FOLLOW INTEGER,
    PRIMARY KEY(ID_User,ID_FOLLOW),
    FOREIGN KEY(ID_User) REFERENCES USER(ID_User),
    FOREIGN KEY(ID_User) REFERENCES USER(ID_User)

);

CREATE TABLE JOUE_TYPE_MUSIQUE (
    ID_User INTEGER ,
    Code_Type_Musique INTEGER,
    PRIMARY KEY (ID_User,Code_Type_Musique),
    FOREIGN KEY (ID_User) REFERENCES USER(ID_User),
    FOREIGN KEY (Code_Type_Musique) REFERENCES TYPE_MUSIQUE(Code_Type_Musique)

);

CREATE TABLE EST (
    ID_Groupe INTEGER ,
    Code_Type_Musique INTEGER,
    PRIMARY KEY (ID_Groupe,Code_Type_Musique),
    FOREIGN KEY (ID_Groupe) REFERENCES GROUPE(ID_Groupe),
    FOREIGN KEY (Code_Type_Musique) REFERENCES TYPE_MUSIQUE(Code_Type_Musique)

);

CREATE TABLE JOUE_INSTRUMENT (
    ID_User INTEGER ,
    Code_Instrument INTEGER,
    PRIMARY KEY (ID_User,Code_Instrument),
    FOREIGN KEY (ID_User) REFERENCES USER(ID_User),
    FOREIGN KEY (Code_Instrument) REFERENCES INSTRUMENT(Code_Instrument)

);

CREATE TABLE AIME (
    ID_User INTEGER ,
    Code_Type_Musique INTEGER,
    PRIMARY KEY (ID_User,Code_Type_Musique),
    FOREIGN KEY (ID_User) REFERENCES USER(ID_User),
    FOREIGN KEY (Code_Type_Musique) REFERENCES TYPE_MUSIQUE(Code_Type_Musique)

);

CREATE TABLE EST_ABONNE_A (
    ID_User INTEGER ,
    ID_Groupe INTEGER,
    PRIMARY KEY (ID_User,ID_Groupe),
    FOREIGN KEY (ID_User) REFERENCES USER(ID_User),
    FOREIGN KEY (ID_Groupe) REFERENCES GROUPE(ID_Groupe)
);

CREATE TABLE SE_PRODUIT (
    ID_Evenement INTEGER ,
    ID_Groupe INTEGER,
    PRIMARY KEY (ID_Evenement,ID_Groupe),
    FOREIGN KEY (ID_Evenement) REFERENCES EVENEMENT(ID_Evenement),
    FOREIGN KEY (ID_Groupe) REFERENCES GROUPE(ID_Groupe)
);

CREATE TABLE PARTICIPE (
    ID_Evenement INTEGER ,
    ID_User INTEGER,
    PRIMARY KEY (ID_Evenement,ID_User),
    FOREIGN KEY (ID_Evenement) REFERENCES EVENEMENT(ID_Evenement),
    FOREIGN KEY (ID_User) REFERENCES USER(ID_User)
);

CREATE TABLE PUBLIE (
    ID_Post INTEGER ,
    ID_User INTEGER,
    PRIMARY KEY (ID_Post,ID_User),
    FOREIGN KEY (ID_Post) REFERENCES POST(ID_Post),
    FOREIGN KEY (ID_User) REFERENCES USER(ID_User)
);

CREATE TABLE PUBLIE_GROUPE (
    ID_Post INTEGER ,
    ID_Groupe INTEGER,
    PRIMARY KEY (ID_Post,ID_Groupe),
    FOREIGN KEY (ID_Post) REFERENCES POST(ID_Post),
    FOREIGN KEY (ID_Groupe) REFERENCES GROUPE(ID_Groupe)
);





