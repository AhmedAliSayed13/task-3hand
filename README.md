# task-3hand
#1-download project from github
#2-to go project folder and open cmd 
#3-run this command 
-> composer update
-> cp .env.example .env
->php artisan key:generate
->php artisan optimize:clear
#4-go to phpmyadmin and create database and name it 'task-3hand'
#5-open .env file and change varibles 
DB_DATABASE=task-3hand   #database name 
DB_USERNAME=root         #database username default value  root
#DB_PASSWORD=            #database password 

#6 run this command in cmd 
->php artisan migrate --seed
->php artisan optimize:clear
->php artisan serve

project url http://127.0.0.1:8000
blogs url:http://127.0.0.1:8000
login url:http://127.0.0.1:8000/login
for admin dashboard :http://127.0.0.1:8000/admin/dashboard
for user dashboard :http://127.0.0.1:8000/user/dashboard

for login admin 
username:admin@gmail.com
password:123456789

for login visitor 
username:user@gmail.com
password:123456789

