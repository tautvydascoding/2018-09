CREATE TABLE IF NOT EXISTS doctors (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) not NULL,
lname VARCHAR(30) NOT NULL
);

--PASITIKRINTI
--show tables;

INSERT INTO doctors
VALUES ("", "Tim", "Logan");
INSERT INTO doctors
VALUES ("", "Paul", "Leo");
INSERT INTO doctors
VALUES ("", "Ona", "Onute");
INSERT INTO doctors
VALUES ("", "Lita", "Onota");
INSERT INTO doctors
VALUES ("", "Koris", "Pita");

CREATE TABLE IF NOT EXISTS patient (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) not NULL,
lname VARCHAR(30) NOT NULL,
doctor_id INT
);

INSERT INTO patient
VALUES ("", "Mark", "John", 2);
INSERT INTO patient
VALUES ("", "Tom", "Karlos", 2);
INSERT INTO patient
VALUES ("", "Aris", "Tiedo", 1);
INSERT INTO patient
VALUES ("", "Tom", "Kapo", 3);
INSERT INTO patient
VALUES ("", "Co", "John", 1);
INSERT INTO patient
VALUES ("", "Tom", "Naro", 5);
INSERT INTO patient
VALUES ("", "Lili", "Jato", 4);

CREATE TABLE IF NOT EXISTS img (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) not NULL,
  patient_id INT
);
INSERT INTO img
VALUES ("", "foto.jpg", 3);
INSERT INTO img
VALUES ("", "3.jpg", 1);
INSERT INTO img
VALUES ("", "1.jpg", 1);
INSERT INTO img
VALUES ("", "2.gif", 2);
INSERT INTO img
VALUES ("", "4.gif", 4);

INSERT INTO straipsniai
VALUES ("", "Mes su Jumis jau 16 metų!", "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", 2018-01-03);
