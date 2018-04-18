SET NAMES UTF8;
DROP DATABASE IF EXISTS tedu;
CREATE DATABASE tedu CHARSET=UTF8;
USE tedu;

CREATE TABLE dept(
	did INT,
	dname VARCHAR(20),
	empCount INT
);

INSERT INTO dept VALUES (
	10,
	'研发部',
	3
);
INSERT INTO dept VALUES (
	20,
	'市场部',
	1
);
INSERT INTO dept VALUES (
	30,
	'运营部',
	2
);

CREATE TABLE emp(
	eid INT,
	ename VARCHAR(32),
	salary INT,
	birthday DATE,
	deptId INT
);

INSERT INTO emp VALUES (
	20,
	'TOM',
	9000,
	'1990-11-10',
	10
);
INSERT INTO emp VALUES (
	30,
	'TOM2',
	9000,
	'1990-11-10',
	10
);
INSERT INTO emp VALUES (
	30,
	'TOM3',
	9000,
	'1990-11-10',
	10
);

INSERT INTO emp VALUES (
	40,
	'JACK',
	8000,
	'1990-11-11',
	20
);

INSERT INTO emp VALUES (
	50,
	'BLUE',
	8000,
	'1990-12-11',
	20
);
INSERT INTO emp VALUES (
	60,
	'JACK',
	8500,
	'1990-12-11',
	20
);