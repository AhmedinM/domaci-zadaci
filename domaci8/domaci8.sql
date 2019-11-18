CREATE DATABASE domaci8;

CREATE TABLE `domaci8`.`cars` 
  ( 
     `id`           BIGINT UNSIGNED NOT NULL auto_increment, 
     `manufacturer` VARCHAR(256) NOT NULL, 
     `model`        VARCHAR(128) NOT NULL, 
     `transmission` ENUM('Automatic', 'Manual') NOT NULL, 
     `engine_cubic` DOUBLE NOT NULL, 
     `fuel_type`    ENUM('Benzin', 'Dizel') NOT NULL, 
     `horse_power`  INT NOT NULL, 
     PRIMARY KEY (`id`) 
  ) 
engine = innodb; 

INSERT INTO `cars` 
            (`id`, 
             `manufacturer`, 
             `model`, 
             `transmission`, 
             `engine_cubic`, 
             `fuel_type`, 
             `horse_power`) 
VALUES      (NULL, 
             'Audi', 
             'R8', 
             'Automatic', 
             '4.2', 
             'Dizel', 
             '345'); 


INSERT INTO `cars` 
            (`id`, 
             `manufacturer`, 
             `model`, 
             `transmission`, 
             `engine_cubic`, 
             `fuel_type`, 
             `horse_power`) 
VALUES      (NULL, 
             'BMW', 
             'M850i', 
             'Automatic', 
             '4.2', 
             'Benzin', 
             '367'); 


INSERT INTO `cars` 
            (`id`, 
             `manufacturer`, 
             `model`, 
             `transmission`, 
             `engine_cubic`, 
             `fuel_type`, 
             `horse_power`) 
VALUES      (NULL, 
             'Ferrari', 
             'LaFerrari', 
             'Automatic', 
             '3', 
             'Dizel', 
             '237'), 
            (NULL, 
             'Lamborghini', 
             'Aventador', 
             'Automatic', 
             '3', 
             'Benzin', 
             '286'); 


INSERT INTO `cars` 
            (`id`, 
             `manufacturer`, 
             `model`, 
             `transmission`, 
             `engine_cubic`, 
             `fuel_type`, 
             `horse_power`) 
VALUES      (NULL, 
             'Mercedes-Benz', 
             'S-Class', 
             'Automatic', 
             '4.2', 
             'Dizel', 
             '345'), 
            (NULL, 
             'Chevrolet', 
             'Impala', 
             'Automatic', 
             '4.2', 
             'Benzin', 
             '367'); 


INSERT INTO `cars` 
            (`id`, 
             `manufacturer`, 
             `model`, 
             `transmission`, 
             `engine_cubic`, 
             `fuel_type`, 
             `horse_power`) 
VALUES      (NULL, 
             'Volkswagen', 
             'Golf Mk2', 
             'Manual', 
             '3', 
             'Dizel', 
             '237'), 
            (NULL, 
             'Renault', 
             'Clio', 
             'Manual', 
             '3', 
             'Benzin', 
             '286'), 
            (NULL, 
             'Opel', 
             'Corsa', 
             'Manual', 
             '4.2', 
             'Dizel', 
             '345'), 
            (NULL, 
             'Peugeot', 
             '206', 
             'Manual', 
             '4.2', 
             'Benzin', 
             '367'); 