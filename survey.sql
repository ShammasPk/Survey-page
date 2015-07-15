SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `survey` ;
CREATE SCHEMA IF NOT EXISTS `survey` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `survey` ;

-- -----------------------------------------------------
-- Table `survey`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `survey`.`user` ;

CREATE TABLE IF NOT EXISTS `survey`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NULL,
  `phone` VARCHAR(15) NOT NULL,
  `result` INT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `survey`.`questions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `survey`.`questions` ;

CREATE TABLE IF NOT EXISTS `survey`.`questions` (
  `id` INT ZEROFILL NOT NULL AUTO_INCREMENT,
  `questions` TEXT NULL,
  `opt1` VARCHAR(45) NULL,
  `opt2` VARCHAR(45) NULL,
  `opt3` VARCHAR(45) NULL,
  `answer` VARCHAR(45) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `questions_UNIQUE` (`questions` ASC))
ENGINE = MyISAM;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
