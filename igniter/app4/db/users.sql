CREATE DATABASE if not exists igniter1;

use igniter1;

CREATE TABLE `users` (
`id` INT(11) NOT NULL AUTO_INCREMENT,
`first_name` VARCHAR(255) NULL DEFAULT NULL,
`last_name` VARCHAR(255) NULL DEFAULT NULL,
`email` VARCHAR(255) NULL DEFAULT NULL,
`phone` VARCHAR(255) NOT NULL,
`password` VARCHAR(255) NULL DEFAULT NULL,
`created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=8;

--Make sure to Run this table script before running the application. Otherwise, a session error will be given.

CREATE TABLE IF NOT EXISTS `ci_sessions` (

        `id` varchar(40) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        PRIMARY KEY (id),
        KEY `ci_sessions_timestamp` (`timestamp`)
);