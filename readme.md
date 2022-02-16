# Onlinefood Application Project in Php

This is an application that manages customers orders and deliveries online.

Contents

### Introduction

  [Sources of information](#sources-of-information)

  [Installation](#installation)
    
   - [Windows](#windows)
   - [Linux](#linux)
  
  [Licenses](#licenses)
  
  [Development](#development)
  
  

### Introduction

Thank you so much for coming here. I love doing what can please many as well as learn from it, and make it better.

### Sources Of Information

Information is all around but not accessed by all. Brilliance is evenly distributed but opportunity is not. 

### Installation

This is how you can install this project on your local machine, computer or just environment.

1. First, clone the repository to your local machine:
    ```git clone https://github.com/dianajoan/foodee.git```

2. Type in the cmd panel:
    ````composer install
        composer update
        php artisan serve
        php artisan key:generate````

4. Next step is to configure the project. If you are using linux, browse into your project directory with the terminal and enter the command

    ```cp .env.example .env```

    If you are on windows, locate the .env.example file, copy all its content and create a new file called .env, paste it all and update these Fields to your created database name. In this case, it is db_foodee

    ```

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=database_name
    DB_USERNAME=root
    DB_PASSWORD=password
    either use the bash command to use a fresh database

    ```


6. Create the database:
    ```
       php artisan migrate
       php artisan db:seed or 
       php artisan migrate --seed
    ```

7. Finally, run the development server:
    
    type 
    Open your fav browser and type `localhost:8080`  or ```localhost/foodee/public``` to see our application home page

### Licenses

The source code is released under the MIT License.

### Development

This is developed by [Diana Joanita Nakyazze](mailto:dianajoanita900@gmail.com)
Powered by ```anitanad.dsnibro.com```
