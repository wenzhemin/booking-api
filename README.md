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
```

to dump all tables and reload them, followed by the seeding that feeds data to the tables.

*NB:*

@Rebeca - you need to set your correct email in the /database/seed/UsersTableSeeder

## Environment files

As you can only have one .env file it becomes an issue with local differences during development. Also in a real setup you might have different environments like development, test, staging and production.

Usually these enviroment files should NOT be committed to your repository as they contain secret information like passwords and stuff. This is not that important in private projekts etc, but keep it in mind.

The normal way to handle multiple enviroments (and each of your computers is an enviroment) you make copies of the .env file and name them like this:
.env_test
.env_production
.env_[developer_name or similar] ie .env_claus or .env_linus

Each of these files should be tailored to the server (or personal computer) they are running on in respect to local URLS, passwords, database names etc.

If you make changes to your local environment - first update your own .env_XXXX file so you are sure that you don't loose the changes. Then copy the contents of your file to the .env file and test them out.

If you add or remove variables in the .env files - do remember to update the .env_team file as this is the reference file you should use to share .env updates with each other.

Open the .gitignore file and add your personal .env_[developer_name] to it (you will find that my own .env_claus is already there)

If the .env file gets updated with your fellow developers settings, it is just a matter of copying the contents of your own file into the .env file and you are all set.

### Steps

1. Make a copy of the .env file that contains your local settings to a new file : .env_claus (change my name to your own)
2. Open .gitignore and add your new filename to it (place it near the .env_claus line to keep .gitignore organised)
3. Commit your changes
4. Do pull/push as normal
