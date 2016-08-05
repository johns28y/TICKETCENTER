/*A Component of my relational database*/
CREATE TABLE Sport ( 
    sport_id INT NOT NULL AUTO_INCREMENT,
    amazonprime_id INT,
    squarecash_id INT,
    sport VARCHAR(255) NOT NULL,
    hometeam VARCHAR(255) NOT NULL,
    awayteam VARCHAR(255) NOT NULL,
    starathlete1 VARCHAR(255) NOT NULL,
    starathlete2 VARCHAR(255) NOT NULL,
    stadium VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    gametime VARCHAR(255) NOT NULL, 
    seat VARCHAR(255) NOT NULL, 
    INDEX (amazonprime_id),
    INDEX (squarecash_id),
    PRIMARY KEY (sport_id), 
    FOREIGN KEY  (amazonprime_id) REFERENCES AmazonPrime(amazonprime_id) ON DELETE CASCADE,
    FOREIGN KEY  (squarecash_id) REFERENCES SquareCash(squarecash_id) ON DELETE CASCADE
);