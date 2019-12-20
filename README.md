# Project information

## APP_URL

APP_URL in .env needs to be set to your local servername (localhost or whatever)

## Setting up mailtrap.io 

- Go to mailtrap.io and register a free acount
- Go to settings on the demo inbox (icon on the right side of the page)
- Copy the username and password (strange sequences of numbers and letters) and paste them into the approprate field in .env

## Database seeders

After you have added/changed seeders in /database/seeds you need to run a composer dump-autoload in the root folder of the application

then you can run

```bash
php artisan migrate:fresh --seed 
````

to dump all tables and reload them, followed by the seeding that feeds data to the tables.

*NB:* running 

@Rebeca - you need to set your correct email in the /database/seed/UsersTableSeeder

