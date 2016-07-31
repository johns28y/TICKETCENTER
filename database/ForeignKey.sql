ForeignKeyRoute
A FOREIGN KEY in one table points to a PRIMARY KEY in another table. 
The "Concertposts" table:
This table is null! so this is irrelevant.
The "Sportposts" table:  
SP_id    sport  hometeam  awayteam   starathlete1  stadium  city   gametime   seat     uniqueid         date
6     test   test      test       test          test     test   test       test     579cd9f1e734b    2016-07-30 18:46:41 
7     test2  test2     test2      test2         test2    test2  test2      test2    579cda69bc641    2016-07-30 18:48:41

The "SquareCashInformation" table: 
S_Id    TicketCost     EmailAddress     SP_id
30      0.00           tyre@gatech.edu    
31      0.00           tyre@gatech.edu 
The "AmazonCollegeCampusInformation" table:
A_Id    PhoneNumber      SP_id
24      770-309-1265
25      804-512-3690
the "SP_Id" column in the "Sportposts" table is the primary key in the "Sportposts" table.
//I need to create a SP_id and a CP_id column in "SquareCashInformation and AmazonCollegeCampusInformation"

the "SP_Id" column in the "Sportposts" table is the FOREIGN key in the AmazonCollegeCampusInformation and SquareCashInformation table.
//delete the uniqueid because I need to create Foreign keys!