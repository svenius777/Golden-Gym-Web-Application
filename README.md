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
![home1](https://github.com/svenius777/Golden-Gym-Web-Application/assets/77848988/81b50f46-aeee-4b9b-88de-cfaf58e228b8)
![home2](https://github.com/svenius777/Golden-Gym-Web-Application/assets/77848988/ec6523af-d9a4-4e67-ad69-b4099fb4f071)
![home3](https://github.com/svenius777/Golden-Gym-Web-Application/assets/77848988/820e8afe-c5b4-4e07-a8bf-9b930203d432)


### Treninzi
![treninzi1](https://github.com/svenius777/Golden-Gym-Web-Application/assets/77848988/241e9596-34a3-4403-b792-cbf4c9184c9c)
![treninzi2](https://github.com/svenius777/Golden-Gym-Web-Application/assets/77848988/13ced61b-f0dd-40b2-a8bf-f51e4f40eaf6)

### O nama
![about1](https://github.com/svenius777/Golden-Gym-Web-Application/assets/77848988/8cb0ca93-b442-475c-872e-3f2a562d7389)
![about2](https://github.com/svenius777/Golden-Gym-Web-Application/assets/77848988/4d0b5948-0520-45ef-acde-4ed142cf1fc0)
![about3](https://github.com/svenius777/Golden-Gym-Web-Application/assets/77848988/29e11aa4-9e42-40e6-8ad4-2c1872adc53e)

### Upiši se
![upisi](https://github.com/svenius777/Golden-Gym-Web-Application/assets/77848988/ad6728c4-de79-4789-9aa0-c1bbd1ddb532)

### Kupi opremu
![oprema](https://github.com/svenius777/Golden-Gym-Web-Application/assets/77848988/a94c2638-dcd0-47ac-85c4-b1ae84c60240)