create table if not exists img (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  doctor_id INT
);

INSERT INTO img
    VALUES ("", "4.jpg", "4");
