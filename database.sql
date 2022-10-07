DROP DATABASE IF EXISTS INJECTION;
CREATE DATABASE INJECTION;
USE INJECTION;

CREATE TABLE EMPLOYEE(
	id int,
	usuario varchar(200),
	contraseña varchar(200),
	PRIMARY KEY(id)

);

INSERT INTO EMPLOYEE VALUES
(1,'Efren','cisco1'),
(2,'Felipe','cisco2'),
(3,'Luis','cisco3'),
(4,'Aldana','cisco4'),
(5,'Rafael','cisco5'),
(6,'Dario','cisco6');
