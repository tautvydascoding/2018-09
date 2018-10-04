
INSERT INTO patients VALUES (NULL, "Mark", "John", 2);
INSERT INTO patients VALUES (NULL, "Tom", "karlos", 2 );
INSERT INTO patients VALUES (NULL, "Aris", "Tiedo", 1 );
INSERT INTO patients VALUES (NULL, "Tom", "Kori", 3 );
INSERT INTO patients VALUES (NULL, "Co", "Jo", 1 );
INSERT INTO patients VALUES (NULL, "Tom", "Naro", 5 );
INSERT INTO patients VALUES (NULL, "Jili", "Joli", 4 );
CREATE TABLE img (
        id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
        name  VARCHAR(100),
        patient_id  INT(6)
);
INSERT INTO img VALUES (NULL, "foto.jpg",  3 );
INSERT INTO img VALUES (NULL, "3.jpg",  1 );
INSERT INTO img VALUES (NULL, "1.jpg",  1 );
INSERT INTO img VALUES (NULL, "3.jpg",  3 );

SELECT  * FROM doctors WHERE id = 4 or id = 5;
UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
SELECT * FROM doctors WHERE name = "Tim" OR 1name = "Leo";
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM doctors WHERE id < 4
ORDER by 1name DESC;
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
SELECT * FROM doctors
 ORDER BY name <> "Ona";
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
select * from patiens order by name asc;
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
update doctor set name ="Litas" where name = "Lita";
  --!!visada nurodome WHERE kai naudojame UPDATE arba DELETE



-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
update doctor set lname ="Makalas" where id = 4;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
update doctor set lname ="Paulaitis" where lname ="Makalas" and id =4;
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
select *from doctor where lname like "L%";


--// uzduotis 1: istrinti gydytoja "Koris"
DELETE from doctor WHERE  id=4;
--// uzduotis 2:  Pakeisti Paciento "Litas" varda i "Keitimas"
update doctor set name ="Keitimas" where name ="Litas" and id =4;
--// uzduotis 3.1: visu pacientu, kuriu vardas yra "Paul" -  varda pakeisti i "Tomas"
update doctor set name ="Tomas" where name ="Paul" and id =2;

--// uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
update patiens   set doctor_id =4  where name like "T%";
--// uzduotis 4: gauti paciento "Mark" daktaro pavarde
SELECT doctor.lname
FROM doctor
INNER JOIN patiens ON patiens.doctor_id = doctor.id and patiens.name = "Mark" ;
