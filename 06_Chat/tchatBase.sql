CREATE SCHEMA `tchat` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `tchat`.`table_chat` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `pseudo` VARCHAR(45) NULL,
  `date` DATETIME NULL,
  `message` TEXT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `idtable_chat_UNIQUE` (`id` ASC) );
