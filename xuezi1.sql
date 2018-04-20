SET NAMES UTF8;

DROP DATABASE IF EXISTS xuezi1;
CREATE DATABASE xuezi1 CHARSET=UTF8;
USE xuezi1;

CREATE TABLE xz_laptop_family(
	fid INT PRIMARY KEY,
	fname VARCHAR(64) UNIQUE,
	laptopCount TINYINT DEFAULT 0 
);

INSERT INTO xz_laptop_family VALUES(
	10,
	'小米Air',
	3
);
INSERT INTO xz_laptop_family VALUES(
	20,
	'联想小新',
	1
);
INSERT INTO xz_laptop_family VALUES(
	30,
	'戴尔燃',
	2
);


CREATE TABLE xz_laptop(
	lid INT PRIMARY KEY AUTO_INCREMENT,
	pic VARCHAR(64),
	title VARCHAR(32),
	price DECIMAL(9, 2),
	details VARCHAR(2048),
	isOnsale BOOL,
	shelfTime BIGINT,
	fmid INT,
	FOREIGN KEY(fmid) REFERENCES xz_laptop_family(fid)
);

-- 日期时间用数字存储

INSERT INTO xz_laptop VALUES (
	NULL,
	'http://www.baidu.com/logo.png',
	'小米Air1',
	2000,
	'<div>这是详情</div>',
	1,
	1524115529238,
	10
);
INSERT INTO xz_laptop VALUES (
	NULL,
	'http://www.baidu.com/logo.png',
	'小米Air2',
	3000,
	'<div>这是详情1</div>',
	1,
	1524115529238,
	10
);
INSERT INTO xz_laptop VALUES (
	NULL,
	'http://www.baidu.com/logo.png',
	'小米Air3',
	4000,
	'<div>这是详情2</div>',
	1,
	1524115529238,
	10
);

INSERT INTO xz_laptop VALUES (
	NULL,
	'http://www.baidu.com/logo.png',
	'联想小新1',
	2000,
	'<div>这是详情3</div>',
	1,
	1524115529238,
	20
);
INSERT INTO xz_laptop VALUES (
	NULL,
	'http://www.baidu.com/logo.png',
	'戴尔燃1',
	5000,
	'<div>这是详情3</div>',
	1,
	1524115529238,
	20
);
INSERT INTO xz_laptop VALUES (
	NULL,
	'http://www.baidu.com/logo.png',
	'戴尔燃2',
	6000,
	'<div>这是详情3</div>',
	1,
	1524115529238,
	30
);


DELETE FROM xz_laptop where lid='5';
UPDATE xz_laptop_family SET laptopCount=laptopCount-1 where fid=30;
