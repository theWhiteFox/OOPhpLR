CREATE TABLE `users` (
	`id` INT(11) NOT NULL,
	`username` VARCHAR(20) NOT NULL COLLATE 'latin1_general_ci',
	`password` VARCHAR(64) NOT NULL COLLATE 'latin1_general_ci',
	`salt` VARCHAR(32) NOT NULL COLLATE 'latin1_general_ci',
	`name` VARCHAR(50) NOT NULL COLLATE 'latin1_general_ci',
	`joined` DATETIME NOT NULL,
	`group` INT(11) NOT NULL,
	PRIMARY KEY (`id`)
)
COMMENT='this is the users table'
COLLATE='latin1_general_ci'
ENGINE=InnoDB;