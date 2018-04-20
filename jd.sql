SET NAMES UTF8;
DROP DATABASE IF EXISTS jd;
CREATE DATABASE jd CHARSET=UTF8;
USE jd;

CREATE TABLE dept(
	did INT PRIMARY KEY,
	dname VARCHAR(10)
);

INSERT INTO dept VALUES (
	10,
	'研发部'
);
INSERT INTO dept VALUES (
	20,
	'市场部'
);
INSERT INTO dept VALUES (
	30,
	'运营部'
);
INSERT INTO dept VALUES (
	40,
	'测试部'
);

CREATE TABLE emp(
	eid INT PRIMARY KEY AUTO_INCREMENT, 
	ename VARCHAR(10),
	salary DECIMAL(9, 2),
	birthday DATE,
	sex TINYINT,
	deptId INT,
	FOREIGN KEY(deptId) REFERENCES dept(did)
);

INSERT INTO emp VALUE(
	NULL,
	'小强1',
	3000,
	'2018-01-02',
	1,
	10
);
INSERT INTO emp VALUE(
	NULL,
	'小强2',
	4000,
	'2017-02-02',
	1,
	10
);
INSERT INTO emp VALUE(
	NULL,
	'小强3',
	5000,
	'2016-03-02',
	1,
	20
);
INSERT INTO emp VALUE(
	NULL,
	'小强4',
	6000,
	'2015-04-02',
	1,
	30
);
INSERT INTO emp VALUE(
	NULL,
	'小强5',
	7000,
	'2015-05-02',
	1,
	10
);
INSERT INTO emp VALUE(
	NULL,
	'小强6',
	8000,
	'2015-06-02',
	1,
	40
);
INSERT INTO emp VALUE(
	NULL,
	'小强7',
	9000,
	'2015-07-02',
	1,
	20
);
INSERT INTO emp VALUE(
	NULL,
	'小强8',
	11000,
	'2014-08-02',
	1,
	20
);
INSERT INTO emp VALUE(
	NULL,
	'小花9',
	12000,
	'2014-09-02',
	0,
	10
);
INSERT INTO emp VALUE(
	NULL,
	'小红0',
	3000,
	'2013-11-02',
	0,
	30
);
INSERT INTO emp VALUE(
	NULL,
	'小强1',
	3000,
	'2013-01-02',
	1,
	10
);
INSERT INTO emp VALUE(
	NULL,
	'小强2',
	4000,
	'2012-02-02',
	1,
	10
);
INSERT INTO emp VALUE(
	NULL,
	'小强3',
	5000,
	'2012-03-02',
	1,
	20
);
INSERT INTO emp VALUE(
	NULL,
	'小强4',
	6000,
	'2012-04-02',
	1,
	30
);
INSERT INTO emp VALUE(
	NULL,
	'小强5',
	7000,
	'2011-05-02',
	1,
	10
);
INSERT INTO emp VALUE(
	NULL,
	'小强6',
	8000,
	'2011-06-02',
	1,
	40
);
INSERT INTO emp VALUE(
	NULL,
	'小强7',
	9000,
	'2011-07-02',
	1,
	20
);
INSERT INTO emp VALUE(
	NULL,
	'小强8',
	11000,
	'2011-08-02',
	1,
	20
);
INSERT INTO emp VALUE(
	NULL,
	'小花9',
	12000,
	'2012-09-02',
	0,
	10
);
INSERT INTO emp VALUE(
	NULL,
	'小红0',
	3000,
	'2014-11-02',
	0,
	30
);
INSERT INTO emp VALUE(
	NULL,
	'小强1',
	3000,
	'2008-01-02',
	1,
	10
);
INSERT INTO emp VALUE(
	NULL,
	'小强2',
	4000,
	'2008-02-02',
	1,
	10
);
INSERT INTO emp VALUE(
	NULL,
	'小强3',
	5000,
	'1984-03-02',
	1,
	20
);
INSERT INTO emp VALUE(
	NULL,
	'小强4',
	6000,
	'1984-04-02',
	1,
	30
);
INSERT INTO emp VALUE(
	NULL,
	'小强5',
	7000,
	'1974-05-02',
	1,
	10
);
INSERT INTO emp VALUE(
	NULL,
	'小强6',
	8000,
	'1954-06-02',
	1,
	40
);
INSERT INTO emp VALUE(
	NULL,
	'小强7',
	9000,
	'1991-07-02',
	1,
	20
);
INSERT INTO emp VALUE(
	NULL,
	'小强8',
	11000,
	'1995-08-02',
	1,
	20
);
INSERT INTO emp VALUE(
	NULL,
	'小浩',
	10100,
	'2118-09-02',
	0,
	10
);
INSERT INTO emp VALUE(
	NULL,
	'小明',
	3000,
	'1994-11-02',
	1,
	30
);