CREATE TABLE Concert( 
    concert_id INT AUTO_INCREMENT NOT NULL,
    venue VARCHAR(255) NOT NULL,
    performer VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    showtime VARCHAR(255) NOT NULL,
    seat VARCHAR(255) NOT NULL,
    emailaddress VARCHAR(255) NOT NULL, 
    phonenumber VARCHAR(255) NOT NULL, 
    ticketcost VARCHAR(255) NOT NULL,
    primary key (concert_id)
);


