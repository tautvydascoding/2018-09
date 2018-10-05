
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
SELECT * FROM patients
 ORDER BY name ASC;
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'

UPDATE doctors SET name = "Litas"
         Where name = "Lite";

-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)

UPDATE doctors SET 1name = "Makalas"
        Where id = 5;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal ir pavarde)
UPDATE doctors SET 1name = "Paulaitis"
       Where 1name = "Makalas" AND id = 5;

  -- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides

SELECT * From doctors
        WHERE 1name LIKE "L%";

-- / uzduotis 1: istrinti gydytoja "Koris"
DELETE FROM doctors
       Where id = 1;

-- // uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
UPDATE patients SET name = "Karolis"
        Where name = "Co" AND id = 5;

-- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
UPDATE patients SET name = "Tomas"
       Where name = "Tom";

-- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
UPDATE patients SET doctor_id = 4
       WHERE name like "T%";

-- // uzduotis 4: gauti paciento "Mark" daktaro pavarde
SELECT doctors.1name
       FROM doctors
       INNER JOIN patients ON patients.doctor_id = doctors.id AND patients.name = "Mark";


-- +++++++++++++++++++++++++
INSERT INTO img pavadinimas VALUES (NULL, "salad_1.jpg", 1, );
INSERT INTO img pavadinimas VALUES (NULL, "salad_2.jpg", 2,  );
INSERT INTO img pavadinimas VALUES (NULL, "salad_3.jpg", 3, );
INSERT INTO img pavadinimas VALUES (NULL, "salad-4.jpg", 4, );
