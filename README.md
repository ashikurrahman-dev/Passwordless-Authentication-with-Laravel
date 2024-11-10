## mail create command
php artisan make:mail magicLoginLink --markdown=mail.magic_login_link

## queue setup for first Email send
laravel11 by default queue setup. so just implement shouldQueue. and run command
php artisan queue:work 
