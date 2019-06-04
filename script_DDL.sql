-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema db_ubuntu
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_ubuntu
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_ubuntu` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;
USE `db_ubuntu` ;

-- -----------------------------------------------------
-- Table `db_ubuntu`.`doacoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_ubuntu`.`doacoes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `valor` FLOAT NOT NULL,
  `data` DATE NOT NULL,
  `instituicao_id` INT(11) NOT NULL,
  `doadores_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `instituicao_id`, `doadores_id`),
  INDEX `fk_teste_instituicao_idx` (`instituicao_id` ASC),
  INDEX `fk_teste_doadores1_idx` (`doadores_id` ASC),
  CONSTRAINT `fk_teste_doadores1`
    FOREIGN KEY (`doadores_id`)
    REFERENCES `mydb`.`doadores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_teste_instituicao`
    FOREIGN KEY (`instituicao_id`)
    REFERENCES `mydb`.`instituicao` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `db_ubuntu`.`doadores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_ubuntu`.`doadores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nomeDoador` VARCHAR(100) NOT NULL,
  `cep` VARCHAR(8) NOT NULL,
  `uf` VARCHAR(2) NOT NULL,
  `cidade` VARCHAR(100) NOT NULL,
  `bairro` VARCHAR(100) NOT NULL,
  `logradouro` VARCHAR(150) NOT NULL,
  `numero` INT(11) NOT NULL,
  `telefone` INT(10) NOT NULL,
  `celular` INT(11) NOT NULL,
  `complemento` VARCHAR(100) NOT NULL,
  `status` TINYINT(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

ALTER TABLE doadores 
ADD instituicao_id int not null DEFAULT 5;

ALTER TABLE doadores
ADD FOREIGN KEY (instituicao_id) REFERENCES instituicao(id);

-- -----------------------------------------------------
-- Table `db_ubuntu`.`instituicao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_ubuntu`.`instituicao` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `razaoSocial` VARCHAR(100) NOT NULL,
  `cnpj` VARCHAR(14) NOT NULL UNIQUE,
  `nomeFantasia` VARCHAR(100) NOT NULL,
  `telefone` VARCHAR(14) NOT NULL,
  `senha` LONGTEXT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 17
DEFAULT CHARACTER SET = utf8;

ALTER TABLE doadores
ADD inclusao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
