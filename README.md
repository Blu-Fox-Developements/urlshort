## urlshort by Conor O'Brien

## Tech Used
- PHP
- Laravel
- jQuery
- JS
- HTML5/CSS3
- Bootstrap 4

## How it Works
- User imputs a URL.
- URL is checked to see if it's vaild.
- URL is then inserted into database with a unique ID.
- A new link is created.
- New link points to a redirect view (/re/).
- Redirect view takes the unique ID and uses it to retrive the original link from the database.
- The view then redirects the user to the original URL.


## Requirements
- PHP/Composer.
- MySQL Server.

## How to Run
- First create a local MySQL database called urlshort.
- Run php artisan migrate in your terminal/CMD.
- Run php artisan serve in your terminal/CMD.

## Known Issues
Laravel quirk menas all string fields must be set to no more than 191 characters, this can cause issue with larger URLs. This can be fixed by going into your DBMS and chnaging the URL char limit field in the post table to 2084.
Regex causes issues with larger URLs, default code offers no checks and allows all URLs through. Code with verification is commented, uncomment this code and comment the original to access verification features.
