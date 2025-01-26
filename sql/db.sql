DROP DATABASE IF EXISTS workers_commpany;
CREATE DATABASE workers_commpany;

USE workers_commpany;

CREATE TABLE company (
cif char(10) NOT NULL PRIMARY KEY,
 country VARCHAR(100) NOT NULL,
 name VARCHAR(100) NOT NULL
);

CREATE TABLE empleados (
dni char(9) NOT NULL PRIMARY KEY,
name VARCHAR(50) NOT NULL,
lastName VARCHAR(100) NOT NULL,
 poblation VARCHAR(100) NOT NULL,
 phone char(11),
);

CREATE TABLE trabajar (
    cif char(10) NOT NULL,
    dni char(9) NOT NULL ,
    FOREIGN KEY (cif) REFERENCES company (cif) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (dni) REFERENCES empleados	(dni) ON DELETE CASCADE ON UPDATE CASCADE
);