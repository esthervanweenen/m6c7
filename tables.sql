CREATE TABLE Kalender(
	activiteitnaam VARCHAR(35),
	PRIMARY KEY( activiteitnaam )
);

CREATE TABLE Activiteit(
	ID INT AUTO_INCREMENT,
	naam VARCHAR(35), 
	datum TIMESTAMP, 
	plaats VARCHAR(35), 
	omschrijving VARCHAR(225),
	PRIMARY KEY( ID )
);

CREATE TABLE Gebruiker(
	ID INT AUTO_INCREMENT,
	rol INT, 
	wachtwoord VARCHAR(25), 
	naam VARCHAR(35), 
	foto VARCHAR(100),
	geboortedatum TIMESTAMP,
	emailadres VARCHAR(50), 
	PRIMARY KEY( ID )
);



