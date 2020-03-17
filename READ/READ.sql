-- Premier bac à sable DRILL 1
SELECT ville FROM Météo;
SELECT ville, haut FROM Météo;
SELECT ville, bas FROM Météo;
SELECT ville FROM Météo WHERE haut > 27;
SELECT ville FROM Météo WHERE bas < 15;
SELECT ville FROM Météo WHERE bas <= 15;
SELECT ville FROM Météo WHERE bas != 15;
SELECT ville FROM Météo WHERE ville LIKE 'Br%';
SELECT ville FROM Météo WHERE haut < 29 AND haut > 25;
SELECT ville FROM Météo WHERE bas = 14 OR bas = 16;
SELECT ville FROM Météo WHERE haut >= 26 AND bas <= 14;
--deuxième bac à sable DRILL 2
SELECT * FROM octocats;
SELECT firstname FROM octocats;
SELECT firstname, lastname, age FROM octocats;
SELECT * FROM octocats WHERE lastname LIKE 'N%';
SELECT firstname, lastname FROM octocats WHERE promo = 'promo1-central';
SELECT firstname, lastname, birthdate FROM octocats WHERE promo = 'promo1-anderlecht';
--deuxième bac à sable DRILL 3
SELECT firstname, lastname FROM octocats ORDER BY firstname ASC;
SELECT firstname, lastname FROM octocats ORDER BY lastname DESC;
SELECT firstname, lastname, age FROM octocats ORDER BY age ASC;
SELECT firstname, lastname, age FROM octocats ORDER BY age DESC;
SELECT firstname, lastname, age FROM octocats WHERE promo = 'promo1-central' ORDER BY age ASC;
SELECT firstname, lastname, age FROM octocats WHERE promo = 'promo1-central' AND age >= 23 AND age <= 28 ORDER BY age ASC;
SELECT firstname, lastname, age, gender FROM octocats WHERE promo = 'promo1-central' AND age >= 25 AND age <= 35 ORDER BY age ASC;
SELECT firstname, lastname, age, gender FROM octocats WHERE promo = 'promo1-central' AND age >= 25 AND age <= 35 AND gender = 'M' ORDER BY age ASC;
SELECT firstname, lastname, age FROM octocats ORDER BY age DESC LIMIT 0,1;
--deuxième bac à sable DRILL 4
SELECT COUNT(*) FROM octocats WHERE gender = 'M';
SELECT COUNT(*) FROM octocats WHERE gender = 'F' AND promo = 'promo1-central';
SELECT COUNT(*) FROM octocats WHERE gender = 'M' AND promo = 'promo1-central';
SELECT COUNT(*) FROM octocats WHERE firstname = 'Nadia';
--troisiéme bac à sable DRILL 4
SELECT firstname, YEAR(birthdate) FROM octocats;
--premier bac à sable DRILL 4
SELECT CONCAT('Demain le maxima observé en Belgique sera de ',haut,' degrés') FROM Météo ORDER BY haut DESC LIMIT 0,1;
SELECT CONCAT('Demain le minima observé en Belgique sera de ',bas,' degrés') FROM Météo ORDER BY bas ASC LIMIT 0,1;