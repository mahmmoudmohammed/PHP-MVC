# PHP MVC Application Architecture

This is a PHP MVC (Model-View-Controller) Architecture that demonstrates a basic implementation of the MVC design pattern. It includes a simple routing system, controllers, models, and views.

## Requirements

- PHP 8.1 or later
- Apache web server with mod_rewrite enabled (or equivalent)

## Installation

1. Clone the repository or download the source code as a ZIP file.
2. Copy the contents of the "app" directory to your web server's document root (e.g. `/var/www/html/`).
3. Copy the contents of the "public" directory to your web server's public directory (e.g. `/var/www/html/public/`).
4. Make sure that the Apache mod_rewrite module is enabled.
5. Make sure to create Apache virtual host.
6. Access the application by navigating to your web browser then write virtual-host URL which you created in **step 5**.

## Configuration

The application configuration settings can be found in the "app/config.php" file. You can modify these settings to configure the database connection, application environment, and other settings as needed.

## Usage

The application includes sample routes:
-  `/` which displays the home page (you can edite as you your Business need requirements).
- `/user` which displays a list of users.
 You can modify these routes or add new routes by editing the _"app/routes.php"_ file.

### _The controllers and views for each route can be found in the "app/Controllers" and "app/Views" directories, respectively. The models can be found in the "app/Models" directory._

## License

This project is licensed under the MIT License - see the LICENSE file for details.

## Acknowledgments

This application was created as a learning exercise based on various online tutorials and resources. Credit goes to the authors of those resources for their contributions.