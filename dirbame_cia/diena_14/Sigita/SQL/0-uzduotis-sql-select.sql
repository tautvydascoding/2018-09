-- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
SELECT * FROM doctors WHERE id = 4 OR id = 5;

-- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'
SELECT * FROM doctors WHERE name = "Tim" or lname = "Leo";
-- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
SELECT * FROM doctors WHERE id < 4;
-- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'
SELECT * FROM doctors WHERE NOT name = "Ona" --nelygu dar yra rasoma sitaip != arba sitaip <>;
ORDER BY name;
-- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
SELECT * FROM patient ORDER BY name;
SELECT * FROM patient WHERE NOT name = "Mark"
ORDER BY name; --galimas toks variantas, kai isrenkam paskui surikiuojam;
-- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'
UPDATE doctors SET name = "Litas" WHERE name = "Lita"; --visada nurodom WHERE!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! NES KITAIP PAKEIS VISKA;




-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)
UPDATE doctors SET lname = "Makalas" WHERE id = 5;
-- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal ID ir pavarde)
UPDATE doctors SET lname = "Paulaitis" WHERE id = 5;
-- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides
SELECT * FROM  doctors WHERE lname LIKE  'L%';
