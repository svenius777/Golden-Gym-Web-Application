# Golden Gym website

## About
This web application was created using PHP, HTML, CSS. I used the WampServer (short for: Windows, Apache, MySQL, PHP) tool which includes Apache server, MySQL DBMS, PHP programming language interpreter and phpMyAdmin (administration tool for MySQL that offers GUI).

## Features
The app servers for advertising purposes. It features a nicely looking dark design where prospectors can explore and learn about the Golden Gym. On the backend, a user can enroll and send their data (name, phone number, etc.) to the server. The data is then saved and inserted into the MySQL database and can be accesed via phpMyAdmin tool. On top of that, web app includes a hardcoded cart which simulates a cart of one random user. The user can enter a coupon (code: 1234) if he wishes for a discount.

## Run locally
In order to run this web app, you must first have installed and setup WampServer. After this, you should open phpMyAdmin tool in your browser. Login as superuser (username: 'root', password: '') and add a new user. Set both username and password to 'guest' and give him all privileges. This is because the web app connects to the MySQL database using credentials in order to pull the data from database and show the content on 'Kupi opremu' category. 

Now we also need to create a database, create a table and insert data into it which will be displayed on 'Kupi opremu' category. Go to the folder in project 'database' and open 'cijene.sql'. Copy the SQL commands and insert them in phpMyAdmin tool in order to insert data. Now the entire app should be working.

## Screenshots
### Home
![](site-screenshots/home1.png)
![](site-screenshots/home2.png)
![](site-screenshots/home3.png)

### Treninzi
![](site-screenshots/treninzi1.png)
![](site-screenshots/treninzi2.png)

### O nama
![](site-screenshots/about1.png)
![](site-screenshots/about2.png)
![](site-screenshots/about3.png)

### Upiši se
![](site-screenshots/upisi.png)

### Kupi opremu
![](site-screenshots/oprema.png)