# Laravel 8 Complete Blog

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## 📝 About the project 📝
This project is about a bodybuilding blog created by Nojus Matusevicius, Jakub Lowis and Martin Macicha
It focuses on anything to do with working out from the staff to the customers 
on the website we wanted to create a place of community but also for people to have a place where they could get
good quality products to help them on their journey on achieving a better body 

## 🎲 Website activites 🎲
-The website is bodybuilding blog website where fellow bodybuilders and users of the gym come and talk about anything gym related. 
-On the website you are able to see the staff who have created the website .
-You are able to see the supplements that the staff recommend .
-You are able to create a profile and login logout accordingly .
-You can view blog posts .
-If you are logged in you are able to add posts edit and delete them. 

## 🤖 How to clone our project 🤖

-Firstly clone the repository from the github at this link https://github.com/CACEMAKEJ/php-assignment-3

```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
```

-You will then need to import the database for the project located in the folder
download and have xampp installed.
you will also need to download composer at the following link https://getcomposer.org/download/

## 🔧 Usage 🔧<br>
Setting up your development environment on your local machine: <br>
```
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

### Before starting <br>
Create a database <br>
```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME={USERNAME}
DB_PASSWORD={PASSWORD}
```

Migrate the tables
```
php artisan migrate
```
Insert the data taken from the .sql file

## ⛏ Contributing ⛏
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome. 👳‍♂️










