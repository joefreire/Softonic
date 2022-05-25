# Softonic Test

API project using PHP with Lumen Framework
I chose Lumen because it is a micro framework that uses the principles of SOLID and with a fast development.

# Requiriments

- PHP >= 7.3
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension

# Instructions

```bash
composer install
cp .env.example .env
php -S localhost:8000 -t public
```
# Usage

The API need get information about two files located on storage/app
and return the correct value passing id

http://localhost:8000/app/21824

# Tests

To run test use 
```bash
vendor/bin/phpunit
```