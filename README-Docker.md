# Portfolio WordPress Docker Setup

This Docker Compose setup provides a complete WordPress development environment with all necessary services.

## Services Included

- **PHP 8.1-FPM**: WordPress-compatible PHP with all required extensions
- **MySQL 8.0**: Database server
- **Nginx**: Web server with optimized configuration for WordPress
- **phpMyAdmin**: Database management interface
- **Composer**: PHP dependency manager
- **WP-CLI**: WordPress command-line interface

## Quick Start

1. **Copy environment file:**
   ```bash
   cp .env.example .env
   ```

2. **Update environment variables in `.env`:**
   - Set your database credentials
   - Update WordPress URLs
   - Generate new security keys at https://api.wordpress.org/secret-key/1.1/salt/

3. **Start the services:**
   ```bash
   docker-compose up -d
   ```

4. **Install WordPress dependencies:**
   ```bash
   docker-compose exec composer composer install
   ```

5. **Access your application:**
   - Website: http://localhost
   - phpMyAdmin: http://localhost:8080
   - Database: localhost:3306

## Available Commands

### Start services
```bash
docker-compose up -d
```

### Stop services
```bash
docker-compose down
```

### View logs
```bash
docker-compose logs -f [service_name]
```

### Access PHP container
```bash
docker-compose exec php bash
```

### Run Composer commands
```bash
docker-compose exec composer composer [command]
```

### Run WP-CLI commands
```bash
docker-compose exec wpcli wp [command]
```

### Install WordPress
```bash
docker-compose exec wpcli wp core install --url="http://localhost" --title="Portfolio" --admin_user="admin" --admin_password="password" --admin_email="admin@example.com"
```

## Configuration

### PHP Configuration
- PHP settings: `docker/php/php.ini`
- Upload settings: `docker/php/uploads.ini`

### Nginx Configuration
- Virtual host: `docker/nginx/default.conf`
- Main config: `docker/nginx/nginx.conf`

### Database
- Data is persisted in Docker volume `mysql_data`
- Initialization scripts can be placed in `docker/mysql/init/`

## Development Workflow

1. Make changes to your WordPress files
2. Changes are automatically reflected (volume mounting)
3. Use WP-CLI for WordPress management tasks
4. Use Composer for PHP dependency management

## Troubleshooting

### Reset everything
```bash
docker-compose down -v
docker-compose up -d
```

### Check service status
```bash
docker-compose ps
```

### View service logs
```bash
docker-compose logs [service_name]
```

### Rebuild PHP container
```bash
docker-compose build php
docker-compose up -d
```
