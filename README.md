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

#### To setup the project locally
To setup the project locally
 - Boot up the instance
   - Run `colima start` to get colima running if it's not already started
   -  cd into the /api folderp
   -  Run `ddev start`. This should create an instance for the project
   -  Once the container is ready, ssh into it using `ddev ssh`
 - Install your packages and set up the environment
   - In the container, run `composer install` and `npm install` to install composer and node packages
   - To set up the .env, run `composer run-script initial-setup`

The Api is now setup and ready to go!
The api data can be accessed independantly via Postman - see here for the Collection
or using the interface.

To setup the interface, see [link to setup the app]




 - Running seeders locally to populate the database, what this does
 - Running tests
 - Link to api docs
- Connecting/viewing the database locally with DDEV and sequel ace

##  The Spa App

The interface for the application is built using [Nuxt.js](https://nuxtjs.org/)

###  Running the app locally


 ## Running  tests

# Usage docs ( these will live in a seperate application)
 ## Creating a season

 ## Creating a user/player

 ## Inviting a user to a season

 ## User subscribing to a season

 ## Question types
  - Standings
  - Competititions
  - Free text

## Scoring
