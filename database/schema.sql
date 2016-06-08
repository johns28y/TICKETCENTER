
CREATE TABLE posts(
 `id` MEDIUMINT NOT NULL primary key   AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
   `body` MEDIUMTEXT NOT NULL,
  `date` DATETIME NOT NULL 
) ENGINE = InnoDB

/*
should the id MEDIUMINT be next to title?
*/


