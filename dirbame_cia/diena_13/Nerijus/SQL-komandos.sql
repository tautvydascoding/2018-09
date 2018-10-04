-- primary key uzdeda id ant stulpelio , AUTO_INCREMENT  - automatinis didejimas
CREATE TABLE IF NOT EXISTS pacients (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) not NULL,
  lname VARCHAR(30) not NULL
);

--PASITIKRINTI
show tables;


  INSERT INTO doctors VALUES ("", "Tim", "Logan");
  INSERT INTO doctors VALUES ("", "Paul", "Leo");
  INSERT INTO doctors VALUES ("", "Ona", "Onute");
  INSERT INTO doctors VALUES ("", "Lita", "Oneta");
  INSERT INTO doctors VALUES ("", "Koris", "Pita");


  -- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
  SELECT * FROM doctors
  WHERE id = 4 OR id = 5;
  -- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
  SELECT * FROM doctors WHERE name = "Tim" OR lname = "Leo";

  -- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
  SELECT * FROM doctors WHERE id < 4;

  -- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
  SELECT * FROM doctors WHERE NOT name = "Ona";
  SELECT * FROM doctors WHERE name <> "Ona";

  -- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
  SELECT * FROM patients
           ORDER BY name ASC;

  -- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
  UPDATE doctors SET name = "Litas"
                 WHERE name = "Lita"; -- !!!! visada nurodyti where su update
  -- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
  UPDATE doctors SET name = "Makalas"
                 WHERE id = 5;
  -- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
  UPDATE doctors SET lname = "Paulaitis"
                 WHERE name = "Makalas" AND id = 5;

  -- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
  SELECT * FROM doctors
          WHERE lname LIKE "L%";
  -- uzduotis 1: istrinti gydytoja "Koris"
  DELETE FROM doctors
         WHERE id = 10;
  -- uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"
  UPDATE patients SET name = "Karolis"
                 WHERE name = "co";
  -- uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
  UPDATE patients SET name = "Tomas"
                 WHERE name = "tom";
  -- uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
  UPDATE patients SET doctor_id = 4
                  WHERE name LIKE "T%";
  -- uzduotis 4: gauti paciento "Mark" daktaro pavarde
  SELECT doctors.lname
  FROM doctors
  INNER JOIN patients ON patients.doctor_id = doctor_id AND doctors.name = "mark";
