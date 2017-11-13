# EhackBv5
EhackBv5 registration system for the annual gaming event organised by Erasmus University College Brussels.

## Initial setup
To setup this project, first download or pull it to your local system under the home directory of your webserver.

In the root of your project, execute following command
```
composer install
```
This will create a vendor directory with the necessary dependencies for this project.

Rename the `.env.example` to `.env` and edit the `.env` file and add your database credentials (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`). **This file will be provided in internal communication.** For example:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ehackb
DB_USERNAME=ehackb
DB_PASSWORD=pass123
```

After this step, you should migrate the database from the migration files:
```
php artisan migrate
```

When there steps are done, you should be able to navigatie to your [localhost](http://localhost).

If you wish to seed the database with test values, you can enter one additional command:
```
php artisan db:seed
```

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Jonas De Frère at jonas(at)defrere.be. All security vulnerabilities will be promptly addressed.

## License

The EhackB website is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
