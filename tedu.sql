SET NAMES UTF8;
DROP DATABASE IF EXISTS tedu;
CREATE DATABASE tedu CHARSET=UTF8;
USE tedu;

CREATE TABLE dept(
	did INT PRIMARY KEY,
	dname VARCHAR(20) UNIQUE,
	empCount INT
);

INSERT INTO dept VALUES (
	10,
	NULL,
	3
);
INSERT INTO dept VALUES (
	20,
	NULL,
	1
);
INSERT INTO dept VALUES (
	30,
	'运营部',
	2
);

CREATE TABLE emp(
	eid INT PRIMARY KEY,
	ename VARCHAR(32),
	salary DECIMAL(10, 2) DEFAULT 99999.99,
	birthday DATE DEFAULT '1970-01-01',
	deptId INT DEFAULT NULL,
	FOREIGN KEY(deptId) REFERENCES dept(did)
);


INSERT INTO emp(eid, ename, salary, deptId) VALUES (
	8,
	'BLEEd',
	9000,
	30
);

INSERT INTO emp(eid, ename, salary, deptId) VALUES (
	1,
	'TOM',
	9000,
	10
);
INSERT INTO emp VALUES (
	4,
	'TOM2',
	9000,
	'1990-11-10',
	10
);
INSERT INTO emp VALUES (
	6,
	'TOM3',
	9000,
	'1990-11-10',
	10
);

INSERT INTO emp VALUES (
	2,
	'JACK',
	8000,
	'1990-11-11',
	20
);

INSERT INTO emp VALUES (
	3,
	'BLUE',
	8000,
	'1990-12-11',
	20
);
INSERT INTO emp VALUES (
	5,
	'JACK',
	8500,
	'1990-12-11',
	20
);