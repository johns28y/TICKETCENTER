ForeignKeyRoute
A FOREIGN KEY in one table points to a PRIMARY KEY in another table. 

The "Concertposts" table:
Concert_id  Venue  Performer   City      Showtime     Seat 
8           test3  test3       test3     test3        test3  
9           test4  test4       test4     test4        test4


The "Sportposts" table:  
Sport_id    sport  hometeam  awayteam   starathlete1  stadium  city   gametime   seat     date
6           test1  test1     test1      test1         test1    test1  test1      test1    2016-07-30 18:46:41 
7           test2  test2     test2      test2         test2    test2  test2      test2    2016-07-30 18:48:41

The "SquareCashInformation" table: 
Square_id    TicketCost     EmailAddress     Sport_id  Concert_id
30           0.00           tyre@gatech.edu              8
31           0.00           tyre@gatech.edu              9

The "AmazonCollegeCampusInformation" table:
Amazon_id   PhoneNumber      Sport_id      Concert_id
24           770-309-1265     6                 8
25           804-512-3690     7                 9
the "Sport_Id" column in the "Sportposts" table is the primary key in the "Sportposts" table
//I need to create a SP_id and a CP_id column in "Square and AmazonCollegeCampusInformation"

the "SP_Id" column in the "Sportposts" table is the FOREIGN key in the AmazonCollegeCampusInformation and SquareCashInformation table.




