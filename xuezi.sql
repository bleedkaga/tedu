SET NAMES UTF8;
DROP DATABASE IF EXISTS xuezi;
CREATE DATABASE xuezi CHARSET=UTF8;
USE xuezi;

CREATE TABLE product(
	lid INT,
	pic VARCHAR(64),
	title VARCHAR(64),
	price INT,
	spec VARCHAR(32),
	stockCount INT,
	isOnseal BOOL,
	shelfTime DATETIME
);

INSERT INTO product VALUES (
	10,
	'http://www.baidu.com/logo.png',
	'标题',
	30,
	'是',
	200,
	TRUE,
	'2018-01-01'
);
INSERT INTO product VALUES (
	20,
	'http://www.baidu.com/logo2.png',
	'标题2',
	40,
	'是',
	400,
	FALSE,
	'2018-01-01'
);
-- 可能性少的用TINYINT

CREATE TABLE user(
	uid INT,
	uname VARCHAR(64),
	upwd VARCHAR(32),
	emial VARCHAR(32),
	phone CHAR(11),
	-- sex CHAR(1),
	sex TINYINT,
	avatar VARCHAR(64),
	registerTime DATETIME,
	isOnline BOOL
);

INSERT INTO user VALUES (
	10,
	'name',
	'password',
	'wenfp@palmtrends.com',
	'13984222192',
	'男',
	'http://www.baidu.com/logo.png',
	'2017-10-10 10:20:21',
	TRUE
);
INSERT INTO user VALUES (
	20,
	'name',
	'password',
	'wenfp@palmtrends.com',
	'13984222192',
	'男',
	'http://www.baidu.com/logo.png',
	'2017-10-10 10:20:21',
	TRUE
);
INSERT INTO user VALUES (
	30,
	'name',
	'password',
	'wenfp@palmtrends.com',
	'13984222192',
	'男',
	'http://www.baidu.com/logo.png',
	'2017-10-10 10:20:21',
	TRUE
);