#!/bin/sh
set -e

# Wait for DB to be ready
until wp db check --allow-root --skip-ssl; do
  echo "Waiting for DB..."
  sleep 5
done

# Install WordPress only if not installed
if ! wp core is-installed --allow-root --skip-ssl; then
  echo "Installing WordPress..."
  wp core install \
    --url="http://localhost:8080" \
    --title="My Docker WP Site" \
    --admin_user="admin" \
    --admin_password="admin123" \
    --admin_email="admin@example.com" \
    --skip-email \
    --allow-root

  echo "Creating sample post..."
  wp post create \
    --post_title="Hello from Docker" \
    --post_content="This is a seeded post from WP-CLI." \
    --post_status=publish \
    --allow-root

  # Activate Portfolio theme
  echo "Activating Portfolio theme..."
  wp theme activate project --allow-root --path=/var/www/html
else
  echo "WordPress already installed. Skipping setup."
fi