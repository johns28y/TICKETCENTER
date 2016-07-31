CREATE TABLE Concertposts(
  Concert_id  MEDIUMINT NOT NULL primary key AUTO_INCREMENT,
  venue VARCHAR(255) NOT NULL,
  performer VARCHAR(255) NOT NULL,
  city VARCHAR(255) NOT NULL,
  showtime VARCHAR(255) NOT NULL,
  seat VARCHAR(255) NOT NULL,
  date DATETIME NOT NULL 
  //primary key
) ENGINE = InnoDB;