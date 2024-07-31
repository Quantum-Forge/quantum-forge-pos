@echo off
echo Running Composer install...
composer install

echo Running NPM install...
npm install

echo Building NPM assets...
npm run build

echo Copying .env.example to .env...
copy .env.example .env

echo Generating application key...
php artisan key:generate

echo Creating database...
php artisan make:database

echo Running migrations and seeders...
php artisan migrate --seed

echo Creating storage symlink...
php artisan storage:link

echo Setup complete!
pause
