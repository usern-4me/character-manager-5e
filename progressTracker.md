# `🗺️ Development Roadmap`

---

# ✅ Phase 1 — Project Foundation

* [x] Create Git repository
* [x] Define project architecture
* [x] Setup SvelteKit + TypeScript frontend
* [x] Setup base routing structure
* [x] Setup PHP backend structure
* [x] Install Composer dependencies
* [x] Configure database connection (MySQL/MariaDB)
* [ ] Setup environment variables (.env handling)
* [x] Create basic API routing system
* [x] Setup CORS handling between frontend/backend
* [x] Test frontend ↔ backend communication

---

# 🔐 Phase 2 — Authentication System

* [ ] Setup Firebase project
* [ ] Configure Firebase auth in frontend
* [ ] Create login page UI
* [ ] Create register page UI
* [ ] Store Firebase JWT token in frontend state
* [ ] Send JWT token to PHP backend
* [ ] Validate Firebase JWT in PHP backend
* [ ] Create auth middleware (protected routes)
* [ ] Create user table in SQL database
* [ ] Link Firebase UID to database user
* [ ] Implement session persistence
* [ ] Logout functionality
* [ ] Password reset flow (Firebase-based)
* [ ] User profile endpoint (`/api/user`)

---

# 📚 Phase 3 — D&D API Integration

* [ ] Connect Open5e API client
* [ ] Connect D&D 5e API client
* [ ] Build reusable API wrapper layer (frontend or backend proxy)
* [ ] Normalize API responses (consistent schema)
* [ ] Add caching layer for repeated requests
* [ ] Handle API rate limits and errors
* [ ] Create search system backend endpoint
* [ ] Build search UI (frontend)
* [ ] Add filters:

  * class
  * race
  * spell level
  * item type
* [ ] Build detail pages for each entity
* [ ] Add loading & error states

---

# 🧙 Phase 4 — Character Creator (CORE SYSTEM)

* [ ] Design character database schema
* [ ] Create character model (frontend + backend sync)
* [ ] Build character creation wizard UI
* [ ] Race selection system
* [ ] Class selection system
* [ ] Background selection system
* [ ] Ability score generator (manual + random)
* [ ] Ability modifier calculation system
* [ ] Skill proficiency system
* [ ] Saving throw system
* [ ] Armor class (AC) calculation logic
* [ ] Initiative calculation
* [ ] Hit points (HP) calculation system
* [ ] Equipment selection system
* [ ] Currency tracking system
* [ ] Inventory system (items, weight, limits)
* [ ] Spellcasting system integration
* [ ] Feat system implementation
* [ ] Automatic feature application from class/race/feats
* [ ] Level-up system (dynamic recalculation)
* [ ] Multiclass support (stretch inside phase)
* [ ] Validation system (prevent invalid builds)
* [ ] Save character to database
* [ ] Load/edit existing characters

---

# 📄 Phase 5 — Character Sheet & Exporting

* [ ] Build full character sheet UI
* [ ] Live stat recalculation system
* [ ] Editable fields with validation
* [ ] Add printable layout mode
* [ ] Integrate fillable PDF generator
* [ ] Export character to PDF
* [ ] Export character to `.json`
* [ ] Import `.json` character files
* [ ] Auto-save system (optional toggle)
* [ ] Versioning system for character updates

---

# ☁️ Phase 6 — Cloud Storage & Sync

* [ ] Save characters in database per user
* [ ] Character ownership system
* [ ] Character CRUD API (create/read/update/delete)
* [ ] Character sharing via link
* [ ] Multi-device sync support
* [ ] Backup & restore system
* [ ] Optional offline-first caching

---

# 🎨 Phase 7 — UI Polish

* [ ] Responsive layout (desktop + mobile)
* [ ] Navigation improvements
* [ ] Loading skeletons
* [ ] Toast notifications system
* [ ] Improved error handling UI
* [ ] Dark/light theme support (optional)
* [ ] Keyboard navigation support
* [ ] Performance optimization (memoization, caching)
* [ ] UX polishing (spacing, consistency)

---

# 🚀 Stretch Goals

* Homebrew content system
* Campaign manager
* Encounter tracker
* Dice roller
* Initiative tracker
* Offline-first mode
* PWA support
* Desktop app version (Tauri/Electron)
* Multiplayer/shared character sheets
* AI-assisted character builder suggestions

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
GET    /api/user
GET    /api/classes
GET    /api/races
GET    /api/spells
GET    /api/items
POST   /api/characters
GET    /api/characters/{id}
PUT    /api/characters/{id}
DELETE /api/characters/{id}
```

---

# 💾 Database Tables

* users
* characters
* inventories
* spells
* character_spells
* feats
* equipment
* campaigns (optional future)

---

# 📄 License

MIT License

---

# 🎲 Goal

To build a fast, structured, and intuitive D&D 5e character manager that removes tedious bookkeeping while preserving full tabletop flexibility and depth.
