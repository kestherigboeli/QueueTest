# QueueTest

Firmstep Queue App

I chose to use PHP laravel framework because of its relative ease to start with, easy routing, flexibile MVC, it supports the latest PHP 7, combines the best of many words and finally, it's an industrial standard framework.


HOW TO INSTALL AND RUN THE QUEUE APPLICATION

First of all, you install WAMP or XAMMP or any server you want, in this test, I used XAMPP

Install get composer https://getcomposer.org/download/ ---->>> click on Composer-Setup.exe and run the file.

I used Sublime text editor. To install sublime text editor, go to: https://www.sublimetext.com/3 or you can use any editor of your choice

Open your terminal, "Command Line" and type -  composer global require"laravel/installer"

I used MySql workbench 6.3 CE for my data storage, however, you can use whichever one you prefer

Open my MySql workbench 6.3 CE -->> create a schema called "Queue" by following the steps outlined below:
					
					DROP DATABASE IF EXISTS Queue
					CREATE DATABASE IF NOT EXISTS Queue
					USE Queue;
					
Select the schema after creating it.

After downloading and extracting the folder, drag and drop the view folder in your desktop, for easy accessibility. (The best way is to clone it using the command - git clone, followed by the url)

Open queue folder in submline or any text editor, click ".env.example file" go to file, save as, .env to create a new file. 

Now you have .env.example and .env, and click .env

Change DB_Host, DB_DATABASE=name of your sechma, DB_USERNAME, DB_PORT and DB_PASSWORD to one of your choosing
 
In the command line, type - cd desktop, followed by cd queue. depending on where your folder is located, (Mine is located on my desktop), and this should take you to the file's location.

In the commad line type - "php artisan migrate", without the double quote to generate database tables.

In the commad line type "php artisan key:generate" without the double quote to generate a key in .env 

In the command line type "php artisan serve" without the double quote to run the code.

Copy the url from the command line and paste it to the brower, the code should work perfectly.

You will notice that the services are not there, which means you would have to maunally go to your database > services table, enter the names of the servcies and click add.

Refresh the page and the services will be displayed.

To view the welcome page, open queue folder, click resources, followed by view, then click on welcome.blade.php.

To view the validation page, open queue folder, click routes and click on web.php.

To view the css page, open queue folder, click public, open css folder and click on style.css.

To view the database page, open queue folder, click database, click migrations, and then you can select any table you want to view.
