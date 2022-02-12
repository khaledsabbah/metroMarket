# Metro-Market Pre-Interview Task
-  I've used Laravel to implement a command that returns a count of the list of products
   that meet criteria, and fetched from mockup url:  http://www.mocky.io/v2/5c6abed9330000cc2e7f4ceb

# Perquisite
- `Docker`
- `docker-compose`
- `Makefile`

# Dev-Ops Description :
- Docker & docker-compose.
- register services  ``php-fpm ``, ``nginx``
- Link each service to service registry .
- use ``make`` command to automate operations

# Install Using PHP
- extract the .zip file or download using `git clone https://github.com/khaledsabbah/metroMarket.git metroMarket`
- `cd metroMarket/source` <small> ( go to source location )</small>
- `composer install ` <small> ( install packages )</small>
- `php artisan serve ` <small> ( run php server )</small>
- `chmod 755 -R storage/logs/`
- `chmod 777 -R storage/framework/sessions/`
- `chmod 777 -R storage/framework/views/`
- `chmod 777 -R storage/framework/cache/`
- `chmod 777 -R bootstrap/cache/`

# Install Using Docker
- extract the .zip file or download using `git clone https://github.com/khaledsabbah/metroMarket.git metroMarket`
- `cd metroMarket` <small> ( go to task location )</small>
- `make init`
- `make install permission`
- You should see the following image
  ![alt text](../images/docker.png)

- To Open docker container use the following command

        docker exec -it phpfpm /bin/bash

#Running
*        php artisan products:fetch count_by_price_range 12.00 20
*        php artisan products:fetch count_by_vendor_id 2

- You should see the following image
  ![alt text](https://github.com/khaledsabbah/metroMarket/blob/main/images/result.png)

## Code Desgin and Architect
I tried to apply S.O.L.I.D principles & use some design pattern and Hydrate everything into object as possible.

#### Patterns used:
- ``Service Pattern``  Calling repository if any, retrieving data and aggregate multiple processes.
- ``Factory Pattern``   Create Criteria object on the fly .
- ``Hydrator Pattern``  Hydrate inputs ( eg. data ) into entities .
- ``Composite Entity Pattern``  Applying composition and relations between Entities.
- ``Filter Pattern``   Filter data and return only what meet the implemented criteria
- ``Itrator Pattern``  Using Itrator Objects .

# WorkFlow
- `ProductsFetcherCommand` calls `read` Method inside `ReaderService`
- `Hydrators` used to hydrate data using `Entities`.
- `Criterias Fitlers` used do our logic and return count of filtered products

