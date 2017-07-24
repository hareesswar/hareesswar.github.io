CREATE TABLE checktable
(
 id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
 name VARCHAR(30) NOT NULL,
 paste LONGTEXT NOT NULL,
 author VARCHAR(30) NOT NULL,
 code VARCHAR(90),
 datetime DATETIME,
 expdate VARCHAR(20),
 view INT,
 password VARCHAR(30) 
);