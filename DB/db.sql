create database personas;

use personas;


CREATE TABLE `personas`.`datos` ( `id` INT NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(40) NOT NULL , 
`direccion` VARCHAR(40) NOT NULL , 
`telefono` BIGINT(18) NOT NULL , 
`nacimiento` DATE NOT NULL , `cedula` VARCHAR(20) NOT NULL , PRIMARY KEY (`id`), 
UNIQUE `cedula` (`cedula`(20))) ENGINE = InnoDB;