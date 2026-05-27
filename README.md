# `character-manager-5e`

A clean D&D character manager built with **SvelteKit + TypeScript** on the frontend and a **PHP backend**, created for [Hack Club Macondo](https://hackclub.com/macondo).

The app lets users create, manage, and export D&D characters, while also searching for game content like spells, items, and other character-related data.

The main goal is to simplify character creation by automatically handling calculations, modifiers, stats, and other mechanics so players can focus on playing instead of filling out complicated character sheets.

---

## Features

* Account system
* D&D content search (using a public API)
* Character creation and management
* PDF character sheet export

---

# Tech Stack

## Frontend

* SvelteKit
* TypeScript
* Vite

## Backend

* PHP
* Firebase JWT
* MariaDB

---

# Setup

## Requirements

You will need:

* [Node.js](https://nodejs.org)
* [PHP](https://www.php.net)
* [Composer](https://getcomposer.org)
* Git
* Apache
* MariaDB

---

## Installation

1. Clone the repository
2. Place the project inside your Apache directory
3. Create the database using the `.sql` file from `database/`
4. In the backend directory, install Firebase JWT:

```bash
composer require firebase/php-jwt
```

5. Run frontend dependencies installation:

```bash
npm install
```

After setting up the database and web server, the application should be ready to host and use.

---

# 🎲 Goal

Create an easy-to-use app for both new and experienced D&D players that makes character creation simple and less overwhelming by reducing the amount of manual calculations and information management required.
