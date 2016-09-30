-- Schema `ticketcenter`
-- -----------------------------------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ticketcenter` DEFAULT CHARACTER SET utf8 ;
USE `ticketcenter` ;

-- -----------------------------------------------------------------------------
-- Table `ticketcenter`.`USER`
-- -----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticketcenter`.`USER` (

    -- User identifier.
    `userid` INT AUTO_INCREMENT NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `phonenumber` VARCHAR(255) NOT NULL UNIQUE,

    -- The password is appended with the 256 bit password salt generated when
    -- the user is created an then hashed andcompared to the password hash.
    `passwordhash` VARCHAR(255) NOT NULL,
    `passwordsalt` CHAR(32) NOT NULL,

    -- IRL name.
    `firstname` VARCHAR(255) NOT NULL,
    `lastname` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`userid`)
)
ENGINE = InnoDB;

-- -----------------------------------------------------------------------------
-- Table `ticketcenter`.`CONCERT`
-- -----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticketcenter`.`CONCERT` (
    `concertid` INT AUTO_INCREMENT NOT NULL,
    `concertname` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `time` DATETIME,
    `groupname` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255),
    PRIMARY KEY (`concertid`)
)
ENGINE = InnoDB;

-- -----------------------------------------------------------------------------
-- Table `ticket-center`.`SPORT`
-- -----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticketcenter`.`SPORT` (
    `sportid` INT AUTO_INCREMENT NOT NULL,
    `eventname` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `time` DATETIME,
    `description` VARCHAR(255),
    PRIMARY KEY (`sportid`)
)
ENGINE = InnoDB;

-- -----------------------------------------------------------------------------
-- Table `ticketcenter`.`TICKET`
-- -----------------------------------------------------------------------------
CREATE TABLE IF NOT EXISTS `ticketcenter`.`TICKET` (
    `ticketid` INT AUTO_INCREMENT NOT NULL,
    `userid` INT NOT NULL,
    `concertid` INT,
    `sportid` INT,
    `seatnumber` VARCHAR(255) NOT NULL,
    `cost` INT NOT NULL,
    PRIMARY KEY (`ticketid`),
    FOREIGN KEY (`userid`) REFERENCES USER(`userid`),
    FOREIGN KEY (`sportid`) REFERENCES SPORT(`sportid`),
    FOREIGN KEY (`concertid`) REFERENCES CONCERT(`concertid`)
)
ENGINE = InnoDB;

ALTER TABLE `TICKET`
ADD CONSTRAINT EXACTLY_ONE_ID CHECK (
    (`concertid` IS NOT NULL AND `sportid` IS NULL) OR
    (`concertid` IS NULL AND `sportid` IS NOT NULL)
);
