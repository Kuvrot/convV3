CREATE DATABASE bin_db;
CREATE DATABASE oct_db;
CREATE DATABASE hex_db;

use bin_db;

CREATE TABLE conversions (

id INT AUTO_INCREMENT,
v_original INT ,
v_converted VARCHAR(32) ,
cur_date DATE,
PRIMARY KEY (id)

);
select * from conversions;


use hex_db;
select * from conversions;
CREATE TABLE conversions (

id INT AUTO_INCREMENT,
v_original INT ,
v_converted VARCHAR(32) ,
cur_date DATE,
PRIMARY KEY (id)

);
use oct_db;

CREATE TABLE conversions (

id INT AUTO_INCREMENT,
v_original INT ,
v_converted INT ,
cur_date DATE,
PRIMARY KEY (id)

);
CREATE DATABASE master_db;
use master_db;
CREATE TABLE conversions (

id INT AUTO_INCREMENT,
bin varchar(32),
hex varchar(32),
oct int,
primary key (id)
);

select * from conversions;