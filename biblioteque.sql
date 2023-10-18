-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema biblioteque
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema biblioteque
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `biblioteque` DEFAULT CHARACTER SET utf8 ;
USE `biblioteque` ;

-- -----------------------------------------------------
-- Table `biblioteque`.`usager`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteque`.`usager` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  `adresse` VARCHAR(45) NULL DEFAULT NULL,
  `phone` VARCHAR(45) NULL DEFAULT NULL,
  `courriel` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `biblioteque`.`emprunt`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteque`.`emprunt` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `date_emprunt` DATE NOT NULL,
  `date_retour` DATE NOT NULL,
  `usager_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_emprunt_usager_idx` (`usager_id` ASC) VISIBLE,
  CONSTRAINT `fk_emprunt_usager`
    FOREIGN KEY (`usager_id`)
    REFERENCES `biblioteque`.`usager` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `biblioteque`.`livre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteque`.`livre` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(45) NOT NULL,
  `auteur` VARCHAR(45) NOT NULL,
  `isbn` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `biblioteque`.`emprunt_livre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteque`.`emprunt_livre` (
  `emprunt_id` INT(11) NOT NULL,
  `livre_id` INT(11) NOT NULL,
  PRIMARY KEY (`emprunt_id`, `livre_id`),
  INDEX `fk_emprunt_has_livre_livre1_idx` (`livre_id` ASC) VISIBLE,
  INDEX `fk_emprunt_has_livre_emprunt1_idx` (`emprunt_id` ASC) VISIBLE,
  CONSTRAINT `fk_emprunt_has_livre_emprunt1`
    FOREIGN KEY (`emprunt_id`)
    REFERENCES `biblioteque`.`emprunt` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_emprunt_has_livre_livre1`
    FOREIGN KEY (`livre_id`)
    REFERENCES `biblioteque`.`livre` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;