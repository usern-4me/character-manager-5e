# `character-manager-5e`

A modern D&D 5e character manager built with **React + TypeScript** frontend and a **PHP backend**, designed for the [Hack Club Macondo](https://hackclub.com/macondo/?utm_source=chatgpt.com) program.

Create, manage, and export fully automated D&D 5e characters with support for:

* Character sheets
* Spell & item searching
* Automatic stat calculations
* Feats, modifiers, proficiencies, and leveling logic
* PDF export support
* Cloud save/login system

The app uses official/open D&D 5e APIs like:

* [Open5e API](https://api.open5e.com/?utm_source=chatgpt.com)
* [D&D 5e API](https://www.dnd5eapi.co/?utm_source=chatgpt.com)

---

# ⚔️ Planned Features

## 👤 Account System

* Firebase Authentication (JWT tokens)
* Secure PHP backend verification
* Account registration/login
* Persistent cloud saves
* Session handling

## 📚 D&D Database Search

Search and view:

* Classes
* Races
* Backgrounds
* Feats
* Items
* Spells
* Monsters
* Conditions
* Equipment

## 🧙 Character Creation

* Guided character creator
* Automatic modifier calculations
* Skill proficiency calculations
* Saving throw handling
* Inventory system
* Spellcasting support
* Feat bonuses automatically applied
* Level-up automation
* HP calculations
* Encumbrance & currency tracking

## 📄 Character Sheet Export

* Fillable PDF export
* Printable sheets
* Save/load `.json` character files
* Import/export characters

---

# 🛠️ Tech Stack

## Frontend

* React
* TypeScript (TSX)
* Vite
* TailwindCSS (planned)

## Backend

* PHP
* Composer
* Firebase JWT Authentication
* MySQL / MariaDB

## APIs

* Open5e API
* D&D 5e API

---

# 📦 Dependencies & Setup

Make sure you have the following installed:

* [Node.js](https://nodejs.org/?utm_source=chatgpt.com)
* [PHP](https://www.php.net/?utm_source=chatgpt.com)
* [Composer](https://getcomposer.org/?utm_source=chatgpt.com)
* MySQL or MariaDB
* Git

---

# 🚀 Setup Instructions

## 1️⃣ Clone the Repository

```bash
git clone https://github.com/usern-4me/character-manager-5e.git

cd character-manager-5e
```

---

## 2️⃣ Frontend Setup

```bash
cd frontend

npm install

npm run dev
```

Frontend runs on:

```txt
http://localhost:5173
```

---

## 3️⃣ Backend Setup

```bash
cd backend

composer install
```

Run local PHP server:

```bash
php -S localhost:8000
```

Backend runs on:

```txt
http://localhost:8000
```

---

# 🔐 Firebase Authentication Setup

This project uses Firebase JWT authentication for login sessions.

## Install Firebase JWT Package

```bash
composer require firebase/php-jwt
```

## Planned Authentication Flow

1. User logs in from frontend
2. Firebase returns JWT token
3. React app sends token to PHP backend
4. Backend validates token
5. User session is authorized
6. User data stored/retrieved from SQL database

---

# 🗂️ Planned Folder Structure

```txt
character-manager-5e/
│
├── frontend/                 # React + TSX frontend
│   ├── src/
│   │   ├── components/
│   │   ├── pages/
│   │   ├── api/
│   │   ├── hooks/
│   │   └── App.tsx
│   │
│   └── package.json
│
├── backend/                  # PHP backend
│   ├── api/
│   ├── auth/
│   ├── database/
│   ├── middleware/
│   └── vendor/
│
├── database/
│   ├── schema.sql
│   └── migrations/
│
├── docs/
│
└── README.md
```

---

# 🗺️ Development Roadmap

# ✅ Phase 1 — Project Foundation

* [x] Create GitHub repository
* [x] Define overall project architecture
* [ ] Setup React + TypeScript frontend
* [ ] Setup PHP backend structure
* [ ] Configure Composer dependencies
* [ ] Configure database connection
* [ ] Setup environment variables
* [ ] Create API routing system
* [ ] Setup CORS handling

---

# 🔐 Phase 2 — Authentication System

* [ ] Configure Firebase project
* [ ] Implement user registration
* [ ] Implement login system
* [ ] JWT token validation in PHP
* [ ] Protected backend routes
* [ ] Session persistence
* [ ] Logout handling
* [ ] Password reset flow
* [ ] User profile system

---

# 📚 Phase 3 — D&D API Integration

* [ ] Connect Open5e API
* [ ] Connect D&D 5e API
* [ ] Create reusable API wrapper
* [ ] Cache API responses
* [ ] Add error handling
* [ ] Create search system
* [ ] Add filters and categories
* [ ] Search page UI

---

# 🧙 Phase 4 — Character Creator

* [ ] Create character model/schema
* [ ] Build race selection UI
* [ ] Build class selection UI
* [ ] Build background selection UI
* [ ] Add ability score generator
* [ ] Automatic modifier calculations
* [ ] Skill proficiency calculations
* [ ] Saving throw calculations
* [ ] Armor class calculations
* [ ] Initiative calculations
* [ ] HP calculations
* [ ] Equipment management
* [ ] Spellcasting system
* [ ] Feat system
* [ ] Level-up system
* [ ] Automatic feature application
* [ ] Validation system

---

# 📄 Phase 5 — Character Sheet & Exporting

* [ ] Character sheet UI
* [ ] Editable sheet fields
* [ ] Live stat recalculation
* [ ] Fillable PDF integration
* [ ] PDF export system
* [ ] Print-friendly layout
* [ ] Character import/export
* [ ] Autosave support

---

# ☁️ Phase 6 — Cloud Storage & Sync

* [ ] Save characters to database
* [ ] Character ownership system
* [ ] Character sharing links
* [ ] Multi-device sync
* [ ] Backup/restore system

---

# 🎨 Phase 7 — UI Polish

* [ ] Responsive layout
* [ ] Dark mode
* [ ] Loading animations
* [ ] Better mobile support
* [ ] Accessibility improvements
* [ ] Toast notifications
* [ ] Search optimizations
* [ ] Better navigation

---

# 🚀 Stretch Goals

* [ ] Homebrew content support
* [ ] Campaign management
* [ ] Encounter tracker
* [ ] Dice roller
* [ ] Initiative tracker
* [ ] Offline support
* [ ] Desktop app version
* [ ] PWA support
* [ ] Multiplayer/shared sheets
* [ ] AI-assisted character creation

---

# 🧪 Running the App

## Frontend

```bash
npm run dev
```

## Backend

```bash
php -S localhost:8000
```

---

# 🔧 Example Backend Endpoints

```txt
POST   /api/auth/login
POST   /api/auth/register
GET    /api/classes
GET    /api/spells
GET    /api/items
POST   /api/characters
GET    /api/characters/{id}
PUT    /api/characters/{id}
DELETE /api/characters/{id}
```

---

# 💾 Database Plans

## Tables

* users
* characters
* inventories
* spells
* character_spells
* feats
* equipment
* campaigns (planned)

---

# 📄 License

**MIT License**

---

# 🎲 Goal

The goal of this project is to create a powerful but easy-to-use D&D 5e character manager that automates the annoying parts of character creation while still staying flexible for real tabletop play.
