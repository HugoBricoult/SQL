SELECT * FROM students;
SELECT prenom FROM students;
SELECT prenom, datenaissance, school FROM students LEFT JOIN school.school ON school.idschool = students.school;  
SELECT * FROM students WHERE genre = 'F';
SELECT * FROM students WHERE school = 3;
SELECT prenom FROM students ORDER BY prenom DESC;
SELECT prenom FROM students ORDER BY prenom DESC LIMIT 0,2;

INSERT INTO students (nom, prenom, genre, datenaissance, school) VALUES ('Ginette','Dalor','F','01/01/1930',1);
UPDATE students SET prenom = "Omer", genre = "M" WHERE nom = 'Ginette';
DELETE from students WHERE id = 3;
UPDATE students SET school = "central" WHERE school = 1;
UPDATE students SET school = "Anderlecht" WHERE school = 2;
