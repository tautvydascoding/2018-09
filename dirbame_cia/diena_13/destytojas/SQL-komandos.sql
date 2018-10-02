CREATE TABLE IF NOT EXISTS doctors (
     id INT UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) not NULL,
     lname VARCHAR(30) NOT NULL
     );


-- PASITIKRINTI
show tables;



INSERT INTO doctors VALUES ("", "Tim", "Logan");
INSERT INTO doctors VALUES (NULL, "Paul", "Leo");
INSERT INTO doctors VALUES ("", "Ona", "Onute");
INSERT INTO doctors VALUES ("", "Lita", "Onota");
INSERT INTO doctors VALUES ("", "Koris", "Pita");
INSERT INTO doctors VALUES ("", "Koris", "Pita");
INSERT INTO doctors VALUES ("", "Koris", "Pita");
INSERT INTO doctors VALUES ("", "Koris", "Pita");


-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
SELECT    *  FROM doctors  WHERE id = 4 OR id = 5;

-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'

SELECT * FROM doctors WHERE name = "Tim" OR lname = "Leo";

-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4

SELECT * FROM doctors
         WHERE id < 4
         ORDER BY lname DESC;

-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
SELECT * FROM doctors WHERE name <> "Ona";

-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT * FROM patients
         ORDER BY name ASC;

-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
UPDATE doctors SET name = "Litas"
               WHERE name = "Lita";
--!!! visada nurodom WHERE kai naudojam UPDATE arba DELETE


-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
UPDATE doctors SET lname = "Makalas"
               WHERE id = 5 ;

-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
UPDATE doctors SET lname = "Paulaitis"
               WHERE lname = "Makalas" AND id = 5;



-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
SELECT * FROM doctors 
         WHERE lname LIKE "L%";



    --
