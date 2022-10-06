DROP DATABASE IF EXISTS INJECTION;
CREATE DATABASE INJECTION;
USE INJECTION;

CREATE TABLE EMPLOYEE(
	userid varchar(45),
	password varchar(45),
	PRIMARY KEY(userid)

);

INSERT INTO EMPLOYEE VALUES
('0001','cisco1'),
('0002','cisco2'),
('0003','cisco3'),
('0004','cisco4'),
('0005','cisco5'),
('0006','cisco6');
