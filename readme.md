## Laravel Twitter Bot

This app sends random tweets (selected from a database) periodically (each hour) and automatically, through the Laravel task scheduling. This project doesn't have a graphical user interface.

You can read how I developed this app in my blog: [Creating a Laravel Twitter bot](https://www.jesusamieiro.com/creating-a-laravel-twitter-bot/)

## Requirements

You need shell access to a server with the [server requirements for a Laravel 5.5 application](https://laravel.com/docs/5.5/installation#server-requirements):  

- PHP >= 7.0.0
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

You need to create a Twitter app and the four keys from the app:

- Consumer Key (API Key)
- Consumer Secret (API Secret)
- Access Token
- Access Token Secret

## Install the bot

- Clone the project. 

```shell
git clone https://github.com/amieiro/laravel-twitter-bot.git
```
    
- Run composer

```shell
composer install
```
    
- Modify the seeder if you need to change it: edit the database/seeds/TweetsTableSeeder.php file.

- Migrate the database with the seeder

```shell
php artisan migrate:refresh --seed
```

- Add the 4 keys from the Twitter app in the .env file.

- Add the scheduler in the cron

```shell
* * * * * php /home/vagrant/Code/web/laravel-twitter-bot/artisan schedule:run >> /dev/null 2>&1
```

## License

The Laravel Twitter Bot is open-sourced software licensed under the [GNU GPL v3](https://opensource.org/licenses/GPL-3.0).
