USE museandsi;

DROP TABLE IF Exists USER ;
DROP TABLE IF Exists POST ;
DROP TABLE IF Exists MUSIQUE ;

CREATE TABLE USER (

    ID_User INTEGER AUTO_INCREMENT,
    NOM_User varchar(50),
    PRENOM_User varchar(50),
    AGE_User INTEGER,
    ROLE_User varchar(50),
    PRIMARY KEY (ID_User)
);



CREATE TABLE POST (

                      ID_Post INTEGER AUTO_INCREMENT,
                      CONTENU_POST text,
                      ID_User INTEGER,
                      PRIMARY KEY (ID_Post),
                      FOREIGN KEY (ID_User) REFERENCES USER(ID_User)

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
