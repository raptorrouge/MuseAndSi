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
INSERT INTO USER VALUES (NULL, 'RAPTOR' ,'TEST',21,'ADMIN');
INSERT INTO USER VALUES (NULL, 'Philippe ','David',18,'ADMIN');
INSERT INTO USER VALUES (NULL, 'André ','Tania',19,'ADMIN');



INSERT INTO POST (CONTENU_POST, ID_User) VALUES ('bonjour, voici ma premier création original raptor production',1);
INSERT INTO MUSIQUE (ID_Musique, NOM_Musique, TEMPS_Musique, ORIGINAL_Musique, CHEMIN_Musique, ID_Post) VALUES (NULL,'Retour a l\'ère des dinosaures','00:01:30', TRUE,'..',1 )

INSERT INTO follow(ID_Créateur, id_follower) values (1,2);
INSERT INTO follow(ID_Créateur, id_follower) values (1,3);
INSERT INTO follow(ID_Créateur, id_follower) values (3,1);


select * from POST;

SELECT NOM_MUSIQUE, CONTENU_POST, NOM_User from MUSIQUE,USER,POST WHERE USER.ID_User=POST.ID_User AND musique.ID_Post =post.ID_Post ;

SELECT * from follow;

/*nombre de follower*/

SELECT count(ID_Créateur) AS "nombre follower" , NOM_User from USER, follow WHERE USER.ID_User=follow.ID_Créateur;

/*nom des follower*/

SELECT NOM_User from USER, follow WHERE USER.ID_User=follow.id_follower and NOM_User='Raptor';

/* nombre de Créateur follow*/

SELECT count(ID_Créateur) AS "nombre de créateur follow" from USER, follow WHERE NOM_User='Tania' and USER.ID_User=follow.ID_Créateur;

