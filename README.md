# Slim skeleton

Use this skeleton application to quickly setup and start working on a new Slim Framework application. This application uses the latest Slim Framework and Monolog logger.

This skeleton application was built for Composer. This makes setting up a new Slim Framework application quick and easy.

## Install the application

Run this command from the directory in which you want to install your new Slim Framework application:

	php composer create-project https://github.com/mramsden/slim-skeleton [my-app-name]

Replace `[my-app-name]` with the desired directory name of your new application. You'll want to:

* Point your virtual host document root to your new application's `public/` directory.
* Ensure `logs/` is web writeable.

To run the application in development, you can run these commands:

	cd [my-app-name]
	php composer start

Run this command in the application directory to run the test suite:

	php composer test

To pull the appropriate docker containers you can run:

	bin/setup

To run composer in docker you can run:

	bin/composer
