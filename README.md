DtBundleDemo
============

Symfony3.3 Demo Project For https://github.com/roni/DatatablesBundle (dev-production). 
Code taken from https://github.com/stwe/DtBundleDemo10.git

## Install

### 1. Clone the project with Git:

```
git clone https://github.com/ronisaha/DataTableIssueTest.git   
git checkout fork
```

### 2. Install composer dependencies

```
composer install
```

### 3. Install assets and dump js routing

```
php bin/console assets:install --symlink
```

```
php bin/console fos:js-routing:dump
```

### 4. Set-up Database

Create database if it doesn't exist.
```
php bin/console doctrine:database:create
```
Create tables based on the Entity classes.
```
php bin/console doctrine:schema:update --force
```
Run fixtures (load sample data into the tables).
```
php bin/console doctrine:fixtures:load --no-interaction
```

## Login

**Admin:**

- Username: root
- Password: root

**User:**

- Username: user
- Password: user

## License

This bundle is under the MIT license. See the complete license in the bundle:

    src/AppBundle/Resources/meta/LICENSE
