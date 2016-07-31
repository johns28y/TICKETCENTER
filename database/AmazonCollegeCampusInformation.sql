CREATE TABLE AmazonCollegeCampusInformation(
Amazon_id int NOT NULL, 
PhoneNumber int NOT NULL, 
Sport_id int, 
Concert_id int,
PRIMARY KEY (Amazon_id), 
FOREIGN KEY (Sport_id) REFERENCES Sportposts(Sport_id)
FOREIGN KEY (Concert_id)REFERENCES Concertposts(Concert_id)
) ENGINE = InnoDB;