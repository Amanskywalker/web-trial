# php-filehandling

A demonstration using PHP to write a config file (config.php in this case) and use the same config file for further purpose.
For the front-end bootstrap is used (via cdns network so no css files are included).

## Repository Structure
.   
|-- add.php     
|-- core.php    
|-- fill.form.php    
|-- footer.part.php   
|-- head.part.php   
|-- index.php   
|-- LICENSE   
|-- nav.part.php    
|-- README.md   
'-- reset.php   

All the .part.php files are the reusable html code which are used to construct the web page

All the .form.php files are the reusable html form input code which are reused to contruct the web form input.

index.php : Entry point to the application and currently only active page in the application

core.php  : Stores the global variables and functions which are common accross differnent scripts files

add.php   : The script to read the input form the form in index.php and create the config file.

reset.php : The script to reset the config file.

## Live instance

All Demo instance are down currently

## How to Run this?

1. Install php according the system
  - `sudo apt-get install php7.0` for Ubuntu/Debian users
1. Clone this repository `git clone https://github.com/Amanskywalker/php-filehandling.git`
1. `cd php-filehandling\`
1. Use `php -S localhost:8900` to host it on localserver developement server
1. Open you browser and Visit `localhost:8900\index.php`

## Contribution

1. Fork the Repository.
1. Work out the changes.
1. Create a pull request to add those change in this Repository.

## Friendly note
  There is so much here just go ahead a explore it. Any Questions/Suggestion just message me.
