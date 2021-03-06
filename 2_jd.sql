/*
练习：编写jd.sql文件，创建数据库jd，包含如下两个表：
dept(  did(pk), dname  )		
	   10   研发部
	   20 	市场部
	   30   运营部
	   40   测试部
emp(  eid(pk),  ename, sex,  salary,  birthday,   deptId(fk) )
插入10位员工信息，分属于10/20/30三个部门
*/
SET NAMES UTF8;
DROP DATABASE IF EXISTS jd;
CREATE DATABASE jd CHARSET=UTF8;
USE jd;

CREATE TABLE dept(
  did INT PRIMARY KEY AUTO_INCREMENT,
  dname VARCHAR(16)
);
INSERT INTO dept VALUES(10, '研发部');
INSERT INTO dept VALUES(20, '市场部');
INSERT INTO dept VALUES(30, '运营部');
INSERT INTO dept VALUES(40, '测试部');

CREATE TABLE emp(
  eid INT PRIMARY KEY AUTO_INCREMENT,
  ename VARCHAR(16),
  sex TINYINT,			#1-男  0-女
  salary DECIMAL(8,2),		#999999.99
  birthday DATE,		#真正项目中推荐使用BIGINT
  deptId INT,
  FOREIGN KEY(deptId) REFERENCES dept(did)
);
INSERT INTO emp VALUES(1,'TOM',1,5000,'1990-1-1',10);
INSERT INTO emp VALUES(2,'MARY',0,3000,'1991-2-1',10);
INSERT INTO emp VALUES(3,'JOE',1,5700,'1990-1-2',10);
INSERT INTO emp VALUES(4,'KEAN',0,8000,'1992-1-3',10);
INSERT INTO emp VALUES(5,'LEAN',1,9000,'1990-6-1',20);
INSERT INTO emp VALUES(6,'JERRY',1,5100,'1990-3-1',20);
INSERT INTO emp VALUES(7,'JACK',1,5300,'1991-1-4',30);
INSERT INTO emp VALUES(8,'MIEA',0,6000,'1990-8-2',30);
INSERT INTO emp VALUES(9,'JIEK',0,5500,'1992-5-1',30);
INSERT INTO emp VALUES(10,'KATE',1,8300,'1990-1-1',10);
INSERT INTO emp VALUES(11,'EG',1,4300,'1993-1-1',20);
INSERT INTO emp VALUES(12,'JOEE',1,5900,'1992-1-1',30);
INSERT INTO emp VALUES(13,'LILY',0,6300,'1991-1-1',20);
INSERT INTO emp VALUES(14,'ADA',0,5300,'1990-7-3',10);
INSERT INTO emp VALUES(15,'KING',1,9000,'1989-1-1',NULL);