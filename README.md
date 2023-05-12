## Laravel 8 Complete Blog
TEST COMMIT

This repository is linked to [this youtube video](https://www.youtube.com/watch?v=HKJDLXsTr8A&t=4710s) where I show you how to create a complete blog in Laravel 8 using best practices.

•	Author: Code With Dary <br>
•	Twitter: [@codewithdary](https://twitter.com/codewithdary) <br>
•	Instagram: [@codewithdary](https://www.instagram.com/codewithdary/) <br>

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone git@github.com:codewithdary/laravel-8-complete-blog.git
cd laravel-8-complete-blog
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
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

## Contributing
Do not hesitate to contribute to the project by adapting or adding features ! Bug reports or pull requests are welcome.




## Our Readme File and about our website 
This project is about a bodybuilding blog created by Nojus Matusevicius, Jakub Lowis and Martin Macicha
It focuses on anything to do with working out from the staff to the customers 
on the website we wanted to create a place of community but also for people to have a place where they could get
good quality products to help them on their journey on achieving a better body 

## HOW TO CLONE THE WEBSITE 
Firstly clone the repository from the github at this link https://github.com/CACEMAKEJ/php-assignment-3

To fork the repository you will need vscode or another form of application to run similar type of code.
Copy the link from the repository and in your vscode paste in the repo code.

You will then need to import the database for the project located in the folder
download and have xampp installed 
you will also need to download composer at the following link https://getcomposer.org/download/

once it is running make sure it is running with the correct and appropriate form of php
In the terminal of the application you will need to make sure that you a up to data version of php
you will then run the following command "php artisan serv"

open the browser of your choice
copy and paste the link that is displayed into your browser

## WHAT YOU CAN DO ON THE WEBSITE
The website is bodybuilding blog website where fellow bodybuilders and users of the gym come and talk about anything gym related. 
On the website you are able to see the staff who have created the website .
You are able to see the supplements that the staff recommend .
You are able to create a profile and login logout accordingly .
You can view blog posts .
If you are logged in you are able to add posts edit and delete them. 





