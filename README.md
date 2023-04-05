# About Predictions
 Predictions is an SPA web application used to create, answer and score a set of predictions for a football season.

Examples of the types of predictions players can predict:
 - Which position will team finish the season in within their league
 - Which player will get the first red card of the season
 - Which team will win the Champions League

 The interface is built with Nuxt.js and the Api is built with Laravel.


 The application is split into two seperate applications which live on the same repo.
 The Api for the application is built in Laravel and lives in /api.
 The front-end for the application is built in Nuxt.js and lives in /app.


# Installation
##  The Api

The Api for the application is built in the Laravel Framework

### Running the Api locally

The Api is setup to use container tool DDEV locally.
To get the project to run locally using DDEV you must install DDEV. To do this, either follow the installation steps in [DDEVs' documentation site](https://ddev.readthedocs.io/en/stable/users/install/ddev-installation/), or follow the quick guide below below:

 ### Quick guide to installing DDEV
 The following instructions assume you have [Homebrew](https://brew.sh/) installed
  - Install Docker client if you dont already have it: `brew install docker`
  - Install Colima (for creating container instances): `brew install colima`
  - Finally, install DDEV: `brew install ddev/ddev/ddev`

#### Running the Laravel Api  locally
To setup the project locally
 - Boot up the instance
   - Run `colima start` to get colima running if it's not already started
   -  cd into the /api folderp
   -  Run `ddev start`. This should create an instance for the project
   -  Once the container is ready, ssh into it using `ddev ssh`
- Install your packages and set up the environment
   - In the container, run `composer install` and `npm install` to install composer and node packages
   - To set up the .env, and seed the database with test data, run `composer run-script initial-setup`

The Api is now setup and ready to go!
The Api data can be accessed independantly via Postman (see here for the Collection),
or using the interface.

To setup the interface, see [link to setup the app]

##  The Spa App

The interface for the application is built using [Nuxt.js](https://nuxtjs.org/).
Tp run the app locally, you must have [Node](https://nodejs.org/en/download) and (npm)https://docs.npmjs.com/downloading-and-installing-node-js-and-npm installed on your machine


###  Running the Spa App locally
To run the spa app locally:
 - cd into the /app folder
 - run `npm install` to install node packages
 - run `npm run  initial-setup` to setup the project
 - run `npm run dev` to create a server to run the application on

### Connecting to the Api
The app can be run independanly of the api by using mock data generated with json-server.

To run the json-server, run `npm run mock`.
This will create a mock server at  http://localhost:3000/ with a /predictions endpoint


## Running  tests

The Api contains a test suite. The feature require test database, therefore the ddev container must be booted up.

To run the tests, naviagate to the api folder, ssh in to ddev (`ddev ssh`) and run `php artisan test`
