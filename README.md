# Landing Page

First, create a new Laravel project by running the following command in your terminal:

`composer create-project --prefer-dist laravel/laravel landing-page`

Next, create a new view file for the landing page by running the following command:

`php artisan make:view welcome`

This will create a new view file `welcome.blade.php` in the `resources/views` directory. Open the file and replace its contents with the `welcome.blade.php` code:

This code extends the default `app.blade.php` layout file, which is included with a new Laravel installation. It contains a jumbotron with a welcome message and a button, as well as three feature boxes with headings, text, and buttons.

Next, open the `resources/views/layouts/app.blade.php` file and replace its contents with the `app.blade.php` code:

Finally, run the following command in your terminal to compile the CSS and JavaScript assets:

`npm install && npm run dev`

This will install the required dependencies and compile the assets using Laravel Mix.

You can now serve the application by running the following command:

`php artisan serve`

Visit `http://localhost:8000` in your browser to see the landing page.
