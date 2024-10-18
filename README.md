# My Webstore

This is a PHP-based webstore application that uses Nginx, PHP-FPM, and MySQL. The project is containerized using Docker and Docker Compose.

## Prerequisites

- Docker
- Docker Compose

## Getting Started

### Clone the Repository

Clone the repository and navigate to the directory:

```bash
git clone https://github.com/yourusername/my-webstore.git
cd my-webstore
```

### Environment Variables

Create a .env file by copying the .env.example and filling in the necessary values:

```
cp .env.example .env
```

### Build and Run the Containers

Build and start the Docker containers:

```
docker-compose up --build
```

### Access the Application

Once the containers are up and running, you can access the application at:

* HTTP: http://localhost
* HTTPS: https://localhost

### Commands Inside the Container

To run commands inside the PHP container, use the following command:

```
docker-compose exec php bash
```

### Stopping the Containers

To stop the running containers:

```
docker-compose down
```

## Project Structure

* `src/Controllers/`: Contains the PHP controllers.
* `resources/views/`: Contains the view templates.
* `public/`: Publicly accessible files, including the entry point index.php.
* `docker-compose.yml`: Docker Compose configuration file.
* `Dockerfile`: Dockerfile for building the PHP container.

## Useful Commands

### Composer

To install PHP dependencies using Composer:

```
docker-compose exec php composer install
```

### NPM

To install JavaScript dependencies using NPM:

```
docker-compose exec php npm install
```

## Running Tests

To run tests using PHPUnit:

```
docker-compose exec php vendor/bin/phpunit
```

## Troubleshooting

### Nginx Issues

If Nginx is not starting, check the logs:

```
docker-compose logs nginx
```

### PHP-FPM Issues

If PHP-FPM is not starting, check the logs:

```
docker-compose logs php
```

