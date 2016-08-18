CREATE TABLE Sport ( 
    sport_id INT AUTO_INCREMENT NOT NULL,
    sport VARCHAR(255) NOT NULL,
    hometeam VARCHAR(255) NOT NULL,
    awayteam VARCHAR(255) NOT NULL, 
    starathlete1 VARCHAR(255) NOT NULL,
    starathlete2 VARCHAR(255) NOT NULL,
    stadium VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    gametime VARCHAR(255) NOT NULL, 
    seat VARCHAR(255) NOT NULL, 
    emailaddress VARCHAR(255) NOT NULL,
    phonenumber VARCHAR(255) NOT NULL, 
    ticketcost VARCHAR(255) NOT NULL, 
    primary key (sport_id)
);