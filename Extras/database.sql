CREATE DATABASE taske2

CREATE TABLE `taske2`.`products`
    (`id` INT NOT NULL AUTO_INCREMENT
    `name` VARCHAR(30) NOT NULL , 
    `description` VARCHAR(30) NULL , 
    `price` DOUBLE NOT NULL , 
    `image_url` VARCHAR(80) NULL 
    , PRIMARY KEY (`id`))
  ENGINE = InnoDB; 