DROP DATABASE IF EXISTS rynps5;

CREATE DATABASE rynps5;

USE rynps5;

CREATE TABLE Products(
    maker CHAR(10),
    model INTEGER(10),
    type CHAR(10),
    PRIMARY KEY (model)
);

CREATE TABLE PCs(
    speed INTEGER,
    model INTEGER,
    ram INTEGER,
    hd INTEGER,
    price INTEGER,
    PRIMARY KEY (model)
);

CREATE TABLE Laptops(
    model INTEGER(10),
    speed INTEGER,
    ram INTEGER,
    hd INTEGER,
    weight INTEGER(10),
    price INTEGER,
    PRIMARY KEY (model)
);

CREATE TABLE Printers(
    model CHAR(10),
    color CHAR(10),
    type CHAR(10),
    price INTEGER,
    PRIMARY KEY (model)
);

INSERT INTO Products (maker, model, type) VALUES ('HP', 1200, 'PC');

INSERT INTO Products (maker, model, type) VALUES ('HP', 1201, 'PC');

INSERT INTO Products (maker, model, type) VALUES ('SAMSUNG', 1202, 'PC');

INSERT INTO Products (maker, model, type) VALUES ('Lenovo', 1203, 'PC');

INSERT INTO Products (maker, model, type) VALUES ('ASUS', 1204, 'PC');

INSERT INTO Products (maker, model, type) VALUES ('MAC', 1205, 'PC');


INSERT INTO PCs (speed, model, ram, hd, price) VALUES (1000, 1200, 4, 520, 900);
INSERT INTO PCs (speed, model, ram, hd, price) VALUES (1020, 1201, 4, 520, 1000);
INSERT INTO PCs (speed, model, ram, hd, price) VALUES (1030, 1202, 4, 520, 1200);
INSERT INTO PCs (speed, model, ram, hd, price) VALUES (1040, 1203, 8, 1000, 1400);
INSERT INTO PCs (speed, model, ram, hd, price) VALUES (1050, 1204, 8, 590, 1600);
INSERT INTO PCs (speed, model, ram, hd, price) VALUES (1060, 1205, 16, 600, 1800);



INSERT INTO Products (maker, model, type) VALUES ('HP', 1206, 'laptop');

INSERT INTO Products (maker, model, type) VALUES ('MAC', 1207, 'laptop');

INSERT INTO Products (maker, model, type) VALUES ('SAMSUNG', 1208, 'laptop');

INSERT INTO Products (maker, model, type) VALUES ('Lenovo', 1209, 'laptop');

INSERT INTO Products (maker, model, type) VALUES ('ASUS', 1210, 'laptop');

INSERT INTO Products (maker, model, type) VALUES ('MAC', 1211, 'laptop');



INSERT INTO Laptops (speed, model, ram, hd, price, weight) VALUES (1000, 1207, 16, 500, 1200, 500);
INSERT INTO Laptops (speed, model, ram, hd, price, weight) VALUES (1000, 1208, 16, 500, 2000, 600);
INSERT INTO Laptops (speed, model, ram, hd, price, weight) VALUES (700, 1209, 16, 500, 700, 700);

INSERT INTO Laptops (speed, model, ram, hd, price, weight) VALUES (800, 1210, 16, 500, 800, 900);
INSERT INTO Laptops (speed, model, ram, hd, price, weight) VALUES (2000, 1211, 32, 1000, 3000, 1000);
INSERT INTO Laptops (speed, model, ram, hd, price, weight) VALUES (1700, 1206, 16, 1000, 1700, 500);


INSERT INTO Products (maker, model, type) VALUES ('HP', 1212, 'printer');

INSERT INTO Products (maker, model, type) VALUES ('MAC', 1213, 'printer');

INSERT INTO Products (maker, model, type) VALUES ('SAMSUNG', 1214, 'printer');

INSERT INTO Products (maker, model, type) VALUES ('Lenovo', 1215, 'printer');

INSERT INTO Products (maker, model, type) VALUES ('ASUS', 1216, 'printer');

INSERT INTO Products (maker, model, type) VALUES ('MAC', 1217, 'printer');


INSERT INTO Printers (model, color, type, price) VALUES (1212, "TRUE", 'ink-jet', 3000);
INSERT INTO Printers (model, color, type, price) VALUES (1213, "FALSE", 'ink-jet', 600);
INSERT INTO Printers (model, color, type, price) VALUES (1214, "FALSE", 'laser', 800);
INSERT INTO Printers (model, color, type, price) VALUES (1215, "FALSE", 'laser', 500);
INSERT INTO Printers (model, color, type, price) VALUES (1216, "TRUE", 'ink-jet', 1500);
INSERT INTO Printers (model, color, type, price) VALUES (1217, "TRUE", 'laser', 5000);



CREATE USER 'hiCute'@'%' identified by 'cutehi'; 
grant all privileges on rynps5.* to 'hiCute'@'%';
