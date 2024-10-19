@echo off
:: Check PHP version
php -v
IF %ERRORLEVEL% NEQ 0 (
    echo "PHP is not installed or not available globally. Please install PHP or add it to your PATH."
    pause
    exit /b
)

:: Check if Composer is installed globally
composer --version
IF %ERRORLEVEL% NEQ 0 (
    echo "Composer is not installed or not available globally. Please install Composer or add it to your PATH."
    pause
    exit /b
)

:: Run Composer update
echo "Updating Composer dependencies..."
composer update

:: Generate application key
echo "Generating application key..."
php artisan key:generate

:: Prompt user to start XAMPP
echo "Please start XAMPP and activate Apache and MySQL, then press any key to continue..."
pause

:: Create session table
echo "Creating session table..."
php artisan session:table

:: Run database migrations
echo "Running migrations..."
php artisan migrate

:: Seed the database
echo "Seeding the database..."
php artisan db:seed

:: Start Laravel development server
echo "Starting Laravel development server..."
php artisan serve

:: Open project in browser
echo "Opening http://localhost:8000 in your browser..."
start http://localhost:8000
