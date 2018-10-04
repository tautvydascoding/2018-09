CREATE TABLE if not EXISTS doctors
(
    id  INT unsigned auto_increment PRIMARY KEY, -- primary key column
    name VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL
    -- specify more columns here
);


 INSERT INTO doctors VALUES ("", "Paul", "Leo");
 INSERT INTO doctors VALUES ("", "Ona", "onute");
 INSERT INTO doctors VALUES ("", "Lita", "Onota");
 INSERT INTO doctors VALUES ("", "Koris", "Pita");
 




CREATE TABLE if not EXISTS patients 
(
    id  INT unsigned auto_increment PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    doctor_id INT unsigned
);

INSERT INTO patients VALUES ("", "Mark", "John", 2);
INSERT INTO patients VALUES ("", "Tom", "Karlos", 2);
INSERT INTO patients VALUES ("", "Aris", "Tiedo", 1);
INSERT INTO patients VALUES ("", "Tom", "Kapo", 3);
INSERT INTO patients VALUES ("", "Co", "John", 1);
INSERT INTO patients VALUES ("", "Tom", "Naro", 5);
INSERT INTO patients VALUES ("", "Lili", "Jato", 4);


CREATE TABLE if not EXISTS img 
(
    id  INT unsigned auto_increment PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    patient_id INT unsigned
);

 INSERT INTO img VALUES ("", "foto.jpg", 3);
 INSERT INTO img VALUES ("", "3.jpg", 1);
 INSERT INTO img VALUES ("", "1.png", 1);
 INSERT INTO img VALUES ("", "2.gif", 2);
 INSERT INTO img VALUES ("", "4.jpg", 4);


-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
SELECT * FROM doctors WHERE id=4 OR id=5;

SELECT * FROM doctors WHERE name = "Tom" OR lname = "Leo";

SELECT * FROM doctors WHERE id < 4;

SELECT * FROM doctors WHERE name <> "Ona";
SELECT * FROM doctors WHERE name != "Ona";

SELECT * FROM patients 
ORDER BY name ASC;




UPDATE doctors SET name = "Litas" WHERE name = "Lita";
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
UPDATE doctors SET lname = "Makalas" WHERE id = 5;



-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal ir pavarde)

UPDATE doctors SET lname = "Paulaitis" WHERE lname = "Makalas" AND  id = 5;


-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides

SELECT * FROM doctors WHERE lname LIKE 'L%';

--1uzduotys sql


-- // uzduotis 1: istrinti gydytoja "Koris"

DELETE FROM doctors WHERE name = 'Koris';

-- // uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"

UPDATE patients SET name = "Karolis" WHERE name = "Co";

-- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"

UPDATE patients SET name = "Tomas" WHERE name = "Tom";

-- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"

UPDATE patients SET doctor_id = 4 WHERE name LIKE 'T%';

-- // uzduotis 4: gauti paciento "Mark" daktaro pavarde

SELECT doctors.lname FROM doctors INNER JOIN patients ON doctors.id = patients.doctor_id AND patients.name = "Mark";

