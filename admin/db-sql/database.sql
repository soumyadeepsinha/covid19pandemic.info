CREATE TABLE `covidinfo`.`information`(
    `id` INT(255) NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `mobile` VARCHAR(10) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `symptom` VARCHAR(255) NOT NULL,
    `message` VARCHAR(255) NOT NULL,
    `created_at` DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(`id`),
    UNIQUE(`email`),
    UNIQUE(`mobile`)
) ENGINE = INNODB;
