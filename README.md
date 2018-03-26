# Easy vocabulary project

Application to learn vocabulary

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Installing

**Update composer dependencies:**

```
composer install
```

**Install node modules:**

```
npm install
```

**Compilling SASS / JS concatination / Live reload:**

```
nmp run prod
```

**Adding DB connection for doctrine cli:**

1) Rename/copy .env.example to .env 
2) Add connection parameters to .env file

```
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=db_name
   DB_USERNAME=db_user
   DB_PASSWORD=db_pssw
```