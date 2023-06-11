# Pub/Sub Multiclient Pub
![coverage](https://img.shields.io/badge/Developed%20by-Oscar-orange)

Required repositories:
* (this) https://github.com/OscarMalda/poc-pubsub-multiclient-pub
* https://github.com/OscarMalda/poc-pubsub-multiclient-sub

Pub/Sub client written in PHP to simulate continuous posting of messages to GCP Pub/Sub.

## Getting Started 📖
Requirements:
* Web server LAMP.
* Service account with access to Pub/Sub in the GCP project.

## Deployment 🚀
This POC is designed to run locally.

Required packages manager via Composer
```
composer install
```

## Usage ✏️
Requesting the page index causes a loop sending messages to the Pub/Sub service.

## Authors 🐒
* @OscarMalda - https://www.oscarmalda.com