

USE museandsi;

select * from user;

UPDATE user SET EMAIL = 'julescrecre@gmail.com', NOM_User ='CREVOISIER' , PRENOM_User ='raptor',AGE_User='30',ROLE_User='Auditeur' where ID_User=1;

select ID_User from user where 'julescrecre@gmail.com'=EMAIL and '3961b48c3ae84ae579b329d73298f8d18687df2a8f5a49fcd8270ba1bc9a62c3'=MDP;
ALTER TABLE user AUTO_INCREMENT=0