<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

- composer install
- Run php artisan key:generate
- Run php artisan migrate

for the data sample

```bash
artisan db:seed --class=UserSeeder
artisan db:seed --class=RoleSeeder
```

- Run php artisan serve 