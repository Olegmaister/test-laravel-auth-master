
## New project
- composer create-project laravel/laravel laravel
- composer install
- php artisan migrate
- php artisan make:controller HomeController

##create auth need run:
composer require laravel/ui "*" --dev
php artisan ui vue --auth

##for style need run:
- npm install
- npm run dev

##after add new route need run:
- php artisan optimize

##need run serve:
- php artisan serve

##Resource
- https://laravel.su/docs/8.x/authorization
- https://laravel.su/docs/8.x/verification
- https://laravel.su/docs/6.x/mix
- setting google profile - https://support.google.com/accounts/answer/185833?visit_id=638091443942271017-3478243872&p=InvalidSecondFactor&rd=1
- I'm used boot in model, https://laravel.demiart.ru/booting-and-initializing-models-with-traits/

##env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=test@gmail.com
MAIL_PASSWORD=ivllvgxopictfkvp
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=test@gmail.com
MAIL_FROM_NAME="${APP_NAME}"

#UserRegistrationLog - inside Helpers/UserRegistrationLog
#used in Models/User
