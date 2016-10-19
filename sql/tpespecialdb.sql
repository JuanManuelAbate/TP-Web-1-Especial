CREATE DATABASE `tpespecialdb`;

USE `tpespecialdb`;

CREATE TABLE `categoria`(
	`id_categoria` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`nombre` VARCHAR(50) UNIQUE NOT NULL);

CREATE TABLE `producto`(
	`id_producto` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`nombre` VARCHAR(50) NOT NULL,
	`descripcion` VARCHAR(500) NOT NULL,
  `fk_id_categoria` INT(11) NOT NULL,
	FOREIGN KEY (`fk_id_categoria`) REFERENCES `categoria`(`id_categoria`));

CREATE TABLE `imagen` (
	`id_imagen` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	`path` varchar(500) NOT NULL,
	`fk_id_producto` int(11) NOT NULL,
	FOREIGN KEY (`fk_id_producto`) REFERENCES `producto`(`id_producto`));
