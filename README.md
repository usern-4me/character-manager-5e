# `character-manager-5e`

A clean D&D character manager built using **SvelteKit+TypeScript** frontend and a **PHP backend**, designed for the [Hack Club Macondo](https://hackclub.com/macondo/?utm_source=chatgpt.com).

It allows you to  create, manage and export D&D character, as well as search for specific elements (like spells, items).

Its created to allow easy creation of characters without worry about calculating modifiers, stats, feats and not waste time on looking for proper fields for everything on character shet.

---
## Features:
### Account system;
### D&D search(using public api)
### character creation and management
### pdf character sheet export
---
## Tech stack

### Frontend
* SvelteKit
* TypeScript
* Vite

### Backend
* PHP
* Firebas(JWT Token)
* MariaDB

### API


## Setup
You need:
* [Node.js](https://nodejs.org)
* [PHP](https://www.php.net)
* [Composer](https://getcomposer.org)
* git
* apache
* MariaDB


---
* clone repository
* place the project in the apache directory
* create db based on .sql file in database/
* in backent using composer instrall Firebase JWT in lib/(composer require firebase/php-jwt)
* run npm install in frontend

after these steps when you make sure db is online you should be able to host the app and normally use it.

