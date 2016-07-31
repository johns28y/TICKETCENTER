CREATE TABLE SquareCashInformation(
Square_id int NOT NULL, 
TicketCost int NOT NULL,
EmailAddress VARCHAR(255) NOT NULL
Sport_id int, 
Concert_id int, 
PRIMARY KEY (Square_id),
FOREIGN KEY (Sport_id) REFERENCES Sportposts(Sport_id)
FOREIGN KEY (Concert_id)REFERENCES Concertposts(Concert_id)
) ENGINE = InnoDB;

/* after my sportposts tests succeed of:
1) karenp@gmail.com
   btaylor@gmail.com
   $0.00

2) mwysocki3@gatech.edu
$0.00

3) ccooney3@gatech.edu
$0.00

4) ntaylor37@gatech.edu
$0.00
5) anawathe@gatech.edu
$0.00
6) ssprague3@gatech.edu
$0.00
8) wgsylvester@gatech.edu
$0.00
9) jschlumper3@gatech.edu
$0.00
10) jzhang678@gatech.edu
$0.00
11) eweise@usatoday.com

12) fettermania@gmail.com
