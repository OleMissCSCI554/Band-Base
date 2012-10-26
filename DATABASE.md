A blue print for the Band Base (BB) project

Version 3.0

10/26/2012

Yi Huang

A great reference: http://www.developphp.com/view.php?tid=132

## Register form

### Scheme

* People can register an account on the BandBase website by providing his first name, last name and email address.
* A user can activate his account by clicking the link in the email sent by the BandBase website. This makes sure the accounts are created by humans.
* After the user activated his account, he will be redirected to the bio page (Slide 4).
* The user can upload his photo and bio on the bio page.
* Another HTML form (in createBio.php) is used to upload the user information, video, audio and poster. This form includes at least: 
	Nick_Name, 
	DOB, 
	Email_Address, 
	Phone_Nmber, 
	Street_Address1, 
	Street_Address2, 
	City, 
	State, 
	Zip, 
	Videos, 
	Audio, 
	Pictures.

### More possible fields for the form of createBio.php

* music style
* instruments played
* skill level
* gender
* genre

### Slides and PHP files

* Slide 3 register.php
* Slide ? (a universal slide) msgToUser.php
* Slide 4 createBio.php

### Coding suggestions

* HTML table and form may be used here.
* All input need to be evaluated either by PHP or Javascript code. For example, no user can use the same email address to register two accounts.
* PHP functions: stripslashes() and strip_tag() may be used to prevent hackers.
* Mysql_real_escape_string may be used to stop SQL injection attack.
* PHP mail function may be used to send an activation email.
* msgToUser.php may be the webpage you go after a user register an account.
* An email activation field may be added to the musician table
* Public mysql_connection.php is ready to use.
* Some sample code is available here: http://www.developphp.com/view.php?tid=132
* And more

### Contributors

* Lee, Giwoo


## Login and logout system-header and footer

### Scheme

* A user can log in to his account by offering his email address and password. When a user clicks a login link in headers, he will be redirected to the login page (Slide 1).
* A user can log out his account by clicking the embedded link in the footer. The user might be redirect to the homepage.

### Slides and PHP files

* Slide 1 and header or footer
* Login.php
* logout.php
* header.php
* footer.php

### Coding suggestions

### Contributors

* Alabi, Adebanke 

## Index page and system administration page

### Scheme

* The index page is the face of a website.
* There is a photo gallery in the middle of the index page.
* After a user click “more” links, the corresponding page will show up.
* After a user clicks a search link, he will be redirected to the corresponding search page.
* The content of the blog will be populated from the system administrator’s blog.

### Slides and PHP files

* index slide
* index.php
* blog.php
* aboutus.php
* searchGenre.php
* searchPop.php
* header.php

### Coding suggestions

* Javascript for the photo gallery

### Contributors
* Jason Boyd


## System administration page

### Scheme

* Dashboard: Once a system administrator has logged in his account: he can view new users by clicking the new users link; 
	He can new events by clicking the new events link; He can also write his blog in this page.
* Rating: ?
* Artist of the week: the administrator can choose the artist of the week.
* Messages: (list out the two newest messages?)
* Pages: ?
* Blog: the administrator can update his blog and the content of the blog will be shown in the index page.
* Users: list all users.
* Bands: list all bands.
* Message: go to the message management page.
* Events: list all events.
* Appearance: change style of the website.

### Slides and PHP files

* Band Base administration slide and more

### Coding suggestions

### Contributors

* Jason Boyd

## A user’s home page and a band’s home page (public)

### Scheme

* Everyone from the internet can view this page.
* The page presents the interests, the location and the self-description of a musician.
* The page also lists all videos of the musician.
* One video is focused with descriptions in the middle of the page.

### Slides and PHP files
* Slide 6

### Coding suggestions

### Contributors

* Deuchler, Philip

## A band’s home page (public)

### Scheme

* The page can be viewed by all people from the internet.
* It includes a band name, photo, self-description and rating.
* If a user has logged in his account, he will be redirected to message management page if he clicks “message us”.
* Otherwise, he will be redirected to the login page.
* A list of band videos will be shown in the middle of the page.
* One of the videos will be focused on.
* The focused video has an introduction.
* All videos are from youtube.com.

### Slides and PHP files

* Slide 9

### Coding suggestions

### Contributors

* Deuchler, Philip



## A user’s buddy management and buddy List page

### Scheme

* In this page, a user can add or delete one person as his buddy. The page displays all friends and bands played with.

### Slides and PHP files

* Slide 8

### Coding suggestions

* We need a buddy table with fields user_id and friend_id.
* Second field is a foreign key of another user_id or a band_id.
* Now we can connect bands with users and users with users.
* We also need a buddylist.php for sending sql requests to the database and provide the data to the buddylist - website (probably buddylist.js).
* To add or delete a buddy to your list we could have a makebuddy.php which receives a id as parameter and add a new record to the buddy table (f.e. : http://bandbase.com/makebuddy.php?buddyid=$buddyid).
* We could add a "add buddy" button to the profile page and when clicking on it, the current userid of this profile will be send to the make buddy.php file.

### Contributors

* Junge, Tino 

## A user’s messages management page

### Scheme

* In this page, two kinds of message will be presented. One is personal message. The other is band message.
* The user can read and reply the message.
* The user also can write new message.
* The receiver of a message could be a musician or a band.
* He can also send message to members of a band.

### Slides and PHP files

* Slide 12

### Coding suggestions

### Contributors

* Becker, Michelle

## A user’s event management page (needed)

### Scheme

* An owner of a band can create and delete an event.
* The page also displays all events created by the user.

### Slides and PHP files

### Coding suggestions

### Contributors

* Zhao, Xiaowei

## The administration page for a user’s bands

### Scheme

* A musician can send a message to all users to tell what he need for one of his bands.
* All of his bands are listed and he can check one band.
* He can create a new band by going to the band creation page.

### Slides and PHP files

* Slide 10

### Coding suggestions

### Contributors

* Gui, Tian

## A user’s band creation page

### Scheme

* A musician can create a band. This is kind of registration form for a band.
* The form fields include a “name”, “add member” and “about” field.
* The owner of the band can upload videos and photos for a band.
* The musician can add more than one band members.
* The photos of the band will be adjusted to suitable size.
* The actual videos are not uploaded.
* The owner only needs to upload a you tube link.

### Possible fields for the form

* Location

### Slides and PHP files

* Slide 13

### Coding suggestions

### Contributors

* Gui, Tian 

## Search page

### Scheme

### Search options

* Type of instrument played by musicians
* Skill level of the musician
* Location of the musician
* Gender of the musician
* Genre of the musician
* Most of information can be found in musician table.
* A search result will show the links of all corresponding public home page of musicians or bands.

### Slides and PHP files

* Slide 7
* search.php

### Coding suggestions

### Contributors

* Makanjuola, Funke

## Map page

### Scheme

* Map options:  Drop down menu with a search button beside it.
* Drop down options:
   * Events
   * Bands
   * Musicians
* Map will show the locations of current events, bands or musicians when search button will be clicked.

### PHP files

* map.php

### Coding suggestions

* There should be a table with at least three fields: Address, Type (i.e. events, bands or musicians) and Name (of event, band or musicians).
* Address should contain the latitude and longitude values of the location to uniquely identify it.
* If the address is in string format i.e. street address then we will have to use Geocoder to get the latitude and longitude values for the address to plot the location on the map. (having latitude and longitude value in the database table will help).

### Flow

* When someone selects an option from the drop down, the php code will look up for the selected type in the database
table corresponding to the name field and will retrieve the address values from it.
* Using those address values, we will plot the location on the map. (we will embed Google map on our web site)

### Contributors

* Sharma, Harshul
* Majumder, Bulbul

## Universal css

### Scheme


## Database

### Scheme

* location
* instruments played
* skill level
* gender
* genre
* is_activated
* and more

### Slides and PHP files

### Coding suggestions

### Contributors

* Movitz, Alex
