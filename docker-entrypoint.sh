#!/bin/bash
set -e

# Wait for the database to be ready before running migrations
echo "Waiting for database connection..."
until php artisan migrate --force; do
  echo "Migration failed, retrying in 5 seconds..."
  sleep 5
done

# Start Apache
exec apache2-foreground
