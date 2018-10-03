CREATE TABLE IF NOT EXISTS doctors (
     id INT UNSIGNED     AUTO_INCREMENT PRIMARY KEY,
     name VARCHAR(30) not NULL,
     lname VARCHAR(30) NOT NULL
   );

   -- pasitikrinti
   show tables;
INSERT INTO doctors
  VALUES("", "One", "Onute");

  INSERT INTO img
    VALUES("", "4.gif", "4");

    DELETE FROM doctors
    WHERE ID = 3 ;
    -- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja

    SELECT * from doctors
    WHERE id = 4 OR id = 5;

    -- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
    SELECT * from doctors
    WHERE name = "Tim" OR lname = "Leo";

    -- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
    SELECT * from doctors
    WHERE id < 4;

    -- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
    SELECT * from doctors
    WHERE name <> 'One';

    -- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
    SELECT * FROM patients
    ORDER BY name;

    -- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'

    UPDATE doctors
    SET name = 'Litas'
    WHERE name = 'Lita';
-- visada nurodom where!!!!! kai naudojam UPDATE ir DELETE
    -- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)

    UPDATE DOCTORS
    SET lname = 'Makalas'
    WHERE id = 5;
    -- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)
    UPDATE DOCTORS
    set lname = 'Paulaitis'
    where id = 5 and name = 'Koris';

    -- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides

    SELECT lname
    FROM doctors
    WHERE lname LIKE "L%";




    -- // uzduotis 1: istrinti gydytoja "Koris"

    DELETE from doctors
    WHERE id = 5;

    -- // uzduotis 2:  Pakeisti Paciento "Co" varda i "Karolis"

    UPDATE patients
    SET name = 'Karolis'
    WHERE name = 'Co';
    -- // uzduotis 3.1: visu pacientu, kuriu vardas yra "Tom" -  varda pakeisti i "Tomas"
    UPDATE patients
    SET name = 'Tomas'
    WHERE name = 'Tom';

    -- // uzduotis 3.2: visu pacientu, kuriu vardas prasideda "T" -  docotor_id pakeisti i "4"
    UPDATE patients
    SET doctor_id = 4
    WHERE name LIKE "T%";
    -- // uzduotis 4: gauti paciento "Mark" daktaro pavarde
    SELECT doctors.lname
    FROM doctors
    INNER JOIN patients ON patients.doctor_id = doctors.id AND patients.name = 'Mark';



    -- //
