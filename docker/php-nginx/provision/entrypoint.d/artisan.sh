# Normal Laravel practice is to have composer installed on your production server.
#
# These are the steps Envoyer (made by Laravel's creator) takes to deploy an app 
#   on production -- I've annotated them below:
# Install application dependencies, such as the Laravel framework itself.
#
# If you run composer update in development and commit the `composer.lock`
# file to your repository, then `composer install` will install the exact
# same versions in production.
#
#  view: https://stackoverflow.com/questions/31895854/laravel-artisan-optimize-best-practices
#
composer install --no-interaction --no-dev

# This may be skipped on production
# Clear the old boostrap/cache/compiled.php
#php artisan clear-compiled

# Migrate any database changes
#php artisan migrate