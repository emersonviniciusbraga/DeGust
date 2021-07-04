-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema degustdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema degustdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `degustdb` DEFAULT CHARACTER SET utf8 ;
USE `degustdb` ;

-- -----------------------------------------------------
-- Table `degustdb`.`usuario_pesquisador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `degustdb`.`usuario_pesquisador` (
  `matricula` BIGINT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`matricula`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `degustdb`.`usuario_colaborador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `degustdb`.`usuario_colaborador` (
  `idusuario_colaborador` BIGINT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(250) NOT NULL,
  PRIMARY KEY (`idusuario_colaborador`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `degustdb`.`pesquisas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `degustdb`.`pesquisas` (
  `idpesquisas` BIGINT NOT NULL AUTO_INCREMENT,
  `titulo_pesquisa` VARCHAR(100) NOT NULL,
  `descricao` VARCHAR(400) NOT NULL,
  `tipo` VARCHAR(45) NOT NULL,
  `usuario_pesquisador_matricula` BIGINT NOT NULL,
  `qrcode` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idpesquisas`),
  INDEX `fk_pesquisas_usuario_pesquisador1_idx` (`usuario_pesquisador_matricula` ASC) ,
  CONSTRAINT `fk_pesquisas_usuario_pesquisador1`
    FOREIGN KEY (`usuario_pesquisador_matricula`)
    REFERENCES `degustdb`.`usuario_pesquisador` (`matricula`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `degustdb`.`formulario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `degustdb`.`formulario` (
  `idformulario` BIGINT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `titulo` VARCHAR(100) NOT NULL,
  `acao` VARCHAR(45) NULL,
  `metodo` VARCHAR(45) NULL,
  `pesquisas_idpesquisas` BIGINT NOT NULL,
  PRIMARY KEY (`idformulario`),
  INDEX `fk_formulario_pesquisas1_idx` (`pesquisas_idpesquisas` ASC) ,
  CONSTRAINT `fk_formulario_pesquisas1`
    FOREIGN KEY (`pesquisas_idpesquisas`)
    REFERENCES `degustdb`.`pesquisas` (`idpesquisas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `degustdb`.`pergunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `degustdb`.`pergunta` (
  `idpergunta` BIGINT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL,
  `tipo` VARCHAR(45) NULL,
  `formulario_idformulario` BIGINT NOT NULL,
  PRIMARY KEY (`idpergunta`),
  INDEX `fk_pergunta_formulario1_idx` (`formulario_idformulario` ASC) ,
  CONSTRAINT `fk_pergunta_formulario1`
    FOREIGN KEY (`formulario_idformulario`)
    REFERENCES `degustdb`.`formulario` (`idformulario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `degustdb`.`alternativa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `degustdb`.`alternativa` (
  `idalternativa` BIGINT NOT NULL AUTO_INCREMENT,
  `texto` VARCHAR(100) NULL,
  `valor` VARCHAR(45) NULL,
  `tipo` VARCHAR(45) NULL,
  `pergunta_idpergunta` BIGINT NOT NULL,
  PRIMARY KEY (`idalternativa`),
  INDEX `fk_alternativa_pergunta1_idx` (`pergunta_idpergunta` ASC) ,
  CONSTRAINT `fk_alternativa_pergunta1`
    FOREIGN KEY (`pergunta_idpergunta`)
    REFERENCES `degustdb`.`pergunta` (`idpergunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `degustdb`.`resposta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `degustdb`.`resposta` (
  `idresposta` BIGINT NOT NULL AUTO_INCREMENT,
  `resposta` VARCHAR(250) NOT NULL,
  `pergunta_idpergunta` BIGINT NOT NULL,
  `usuario_colaborador_idusuario_colaborador` BIGINT NOT NULL,
  PRIMARY KEY (`idresposta`),
  INDEX `fk_resposta_pergunta1_idx` (`pergunta_idpergunta` ASC) ,
  INDEX `fk_resposta_usuario_colaborador1_idx` (`usuario_colaborador_idusuario_colaborador` ASC) ,
  CONSTRAINT `fk_resposta_pergunta1`
    FOREIGN KEY (`pergunta_idpergunta`)
    REFERENCES `degustdb`.`pergunta` (`idpergunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_resposta_usuario_colaborador1`
    FOREIGN KEY (`usuario_colaborador_idusuario_colaborador`)
    REFERENCES `degustdb`.`usuario_colaborador` (`idusuario_colaborador`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
