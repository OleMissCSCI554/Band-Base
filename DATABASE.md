This is a guide to using the database.

Database Address:		wic.cs.olemiss.edu
						OR
						130.74.96.71
						
phpMyAdmin Page:		wic.cs.olemiss.edu/phpmyadmin

This is the BandBase DB
MySQL Username:	bandbase
MySQL Password:	csci554
Permissions:	SELECT
Permissions:	INSERT
Permissions:	UPDATE
Permissions:	DELETE (Only on localhost)
Availability:	localhost
Availability:	turing.cs.olemiss.edu
MySQL Database:	BandBase

Structure:

Musician
	UID : int(10) unsigned zerofill
	First_Name : text
	Middle_Name : text
	Family_Name : text
	Nick_Name : text
	DOB : text
	Email_Address : text
	Phone_Nmber : text
	Street_Address1 : text
	Street_Address2 : text
	City : text
	State : text
	Zip : text
	Videos : text
	Audio : text
	Pictures : text
Video
	UID : int(10) unsigned zerofill
	Musician : text
	Title : text
	Flv : text
Audio
	UID : int(10) unsigned zerofill
	Musician : text
	Title : text
	MP3 : blob
Poster
	UID : int(10) unsigned zerofill
	Musician : text
	Band : text
	Image : blob
Instruments
	UID : int(10) unsigned zerofill
	Musician : text
	Instrument : text
	Skill_Level : text
MusicStyle
	UID : int(10) unsigned zerofill
	Musician : text
	Style : text
	Influence1 : text
	Influence2 : text
	Influence3 : text
	Influence4 : text
Band
	UID : int(10) unsigned zerofill
	Manager : text
	Rating : text
	Style_Type : text
	Vocal_Type : text
	Memebers : text
	Events : text
	Open_Positions : text
	Videos : text
	Audios : text
	Pictures : text
	Email : text
	Book_Event : text
Event
	UID : int(10) unsigned zerofill
	Performance_Type : text
	Band : text
	DateTime : date
	Admission_Type : text
	Admission_Price : decimal(5,2)
Venue
	UID : int(10) unsigned zerofill
	Venue_Type : text
	Location : text
	Date : date
	Contact_First_Name : text
	Contact_Middle_Name : text
	Contact_Family_Name : text
	Contact_Nick_Name : text
	Contact_Email : text
	Contact_Phone : text
	Street_Address1 : text
	Street_Address2 : text
	City : text
	State : text
	Zip : text
Search
	Type_Instrument : text
	Skill_Level : text
	Location : text
	Gender : text
	Genre : text
	Maps : text

This database has the user 'BandBase' which will be used for testing on Wic and on Turing. 
This user will NOT work if you try to use a webserver on a local machine.


This is the tst DB for learning MySQL
MySQL Username:	classdemo
MySQL Password:	csci554
Permissions:	SELECT
Permissions:	INSERT
Permissions:	UPDATE
Permissions:	DELETE (Only on localhost)
Availability:	localhost
Availability:	turing.cs.olemiss.edu
MySQL Database:	classdemo

This database has the user 'classdemo' which will be used for testing on Wic and on Turing. 
This user will NOT work if you try to use a webserver on a local machine.