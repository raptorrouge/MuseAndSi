

USE museandsi;
select * from musique;


select NOM_User, CONTENU_POST, ID_Musique  from publie INNER JOIN user on publie.ID_User=user.ID_User INNER JOIN post on publie.ID_Post=post.ID_Post ;


select NOM_User, CONTENU_POST, NOM_Musique, CHEMIN_Musique  from user,post,musique where post.ID_User=user.ID_User  and musique.ID_Post=post.ID_Post and user.ID_User=2;

select NOM_User, CONTENU_POST, NOM_Musique, CHEMIN_Musique  from user,post,musique where post.ID_User=user.ID_User  and musique.ID_Post=post.ID_Post;

UPDATE user SET EMAIL = 'julescrecre@gmail.com', NOM_User ='CREVOISIER' , PRENOM_User ='raptor',AGE_User='30',ROLE_User='Auditeur' where ID_User=1;


ALTER TABLE musique
    ADD CODE_Type_Musique int,
    ADD FOREIGN KEY (CODE_Type_Musique) REFERENCES type_musique(CODE_Type_Musique);

ALTER TABLE post
    ADD date_post date;



select ID_User from user where 'julescrecre@gmail.com'=EMAIL and '3961b48c3ae84ae579b329d73298f8d18687df2a8f5a49fcd8270ba1bc9a62c3'=MDP;
ALTER TABLE user AUTO_INCREMENT=0