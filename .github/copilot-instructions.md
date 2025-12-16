## Copilot / AI agent instructions for proyecto-prog-web2025

This repository is a Laravel 8 application (PHP 7.3+ / 8.x). The goal of these notes is to make an AI coding agent immediately productive editing, adding features and fixing bugs in this codebase.

- Project root: Laravel app scaffold. Key manifests: `composer.json`, `package.json`, `webpack.mix.js`, `phpunit.xml`.
- Primary language: PHP (Laravel); frontend assets handled via Laravel Mix (npm).

Principales cosas a saber
-------------------------

- Architectural style: standard monolithic Laravel app. Routes live in `routes/web.php`. Controllers are under `app/Http/Controllers`. Eloquent models are under `app/Models` and migrations under `database/migrations`.
- Authentication: custom simple controller `app/Http/Controllers/AuthController.php` uses Laravel's `Auth::attempt()` with users seeded by `database/seeders/Login_seeder.php`. Login view: `resources/views/login/ingreso.blade.php` (search views for exact file).
- Domain entities: Tickets and Prioridades. Models:
  - `App\Models\Ticket` (fillable: `titulo`, `descripcion`, `prioridad_id`, `estado`) and relationship `Prioridad()` belongsTo.
  - `App\Models\Prioridad` (table `prioridades`, fillable `nombre`, `estado`), relationship `Ticket()` hasMany.
- Routes examples (see `routes/web.php`):
  - `GET /` -> `AuthController@login` (named `login`)
  - `POST /` -> `AuthController@ingreso` (named `login.ingreso`)
  - `GET /tickets/nuevo` -> `TicketController@create` (named `tickets.create`)
  - `POST /tickets` -> `TicketController@store` (named `tickets.store`)
  - Prioridades listing and create: `PrioridadesController@prioridades` and `@nuevaprioridad` (routes `/prioridades` and `/prioridades/crear`).

Developer workflows & commands
------------------------------

Use the project's existing Composer / NPM workflows. On a fresh clone or when dependencies changed:

1) Install PHP dependencies:

   composer install

2) Copy or create environment file (the composer scripts attempt to copy `.env.example` on create; if missing do manually):

   copy .env.example .env

3) Generate app key (if missing):

   php artisan key:generate

4) Database setup (uses migrations + seeders included):

   php artisan migrate
   php artisan db:seed

Note: If using an in-memory or sqlite database for tests, phpunit.xml has examples commented for sqlite (`DB_CONNECTION`, `DB_DATABASE`).

5) Frontend build (assets with Laravel Mix):

   npm install
   npm run dev   (or `npm run production` for prod builds)

6) Run tests:

   ./vendor/bin/phpunit

or simply

   php artisan test

Project-specific conventions and patterns
----------------------------------------

- File / naming conventions: Controllers are PascalCase with "Controller" suffix in `app/Http/Controllers`. Models live in `app/Models` and use default PSR-4 autoloading (`App\` namespace).
- Views: Blade templates under `resources/views`. Routes return views directly in some cases (e.g. `return view('principal')`). Inspect view names for exact path (dot notation maps to directories).
- Validation: controllers use `$request->validate([...])` and return redirect with `with('success', ...)` or `withErrors(...)`. Follow this pattern for form handlers.
- Database: migrations create tables `tickets` and `prioridades`. Note that `tickets.prioridad_id` is created as a bigInteger (unsigned) but there is no explicit foreign key declared in migration; when adding constraints be consistent with existing schema.
- Seeders: `DatabaseSeeder` calls `Login_seeder` (creates an admin user with `password` hashed via `Hash::make('123')`) and `Prioridades_create` (creates Alta/Media/Baja). Use these for local dev/test data.

Integration points and external dependencies
------------------------------------------

- Uses Laravel framework (v8.*) and common packages (sanctum, guzzle). See `composer.json` for versions.
- Frontend: Laravel Mix (webpack) with `resources/js/app.js` and `resources/css/app.css` as entry points. `package.json` defines npm scripts `dev`, `watch`, `production`.

Small examples to copy / follow
------------------------------

- Creating a new Ticket (follow `TicketController@store` pattern):
  - Validate with `$request->validate(['titulo'=>'required', ...])`.
  - Use `Ticket::create([...])` with model fillable fields.
  - Redirect back to route with `->with('success', '...')`.

- Adding a Prioridad (follow `PrioridadesController@nuevaprioridad`):
  - Validate `nombre` required and call `Prioridad::create(['nombre'=>$request->nombre])`.

Edge-cases and gotchas discovered in this repo
----------------------------------------------

- Migrations: `create_prioridads_table` drops table `prioridads` in `down()` but the table created in `up()` is `prioridades` — the `down()` uses `Schema::dropIfExists('prioridads');` which doesn't match the `up()` name. Be careful when rolling back; fix this if you modify migrations.
- In `create_tickets_table` migration, `prioridad_id` is created but no foreign key constraint defined. If you add constraints, ensure `prioridades.id` type matches (unsigned bigInteger).
- Seeder `Login_seeder` creates a user with `email` = "admin@gmail" (no top-level TLD). That may be intentional for local-only environments but can break external validation; be aware.

Where to look next (key files to inspect when implementing features)
------------------------------------------------------------------

- Routes: `routes/web.php`
- Controllers: `app/Http/Controllers/*` (AuthController, TicketController, PrioridadesController)
- Models: `app/Models/Ticket.php`, `app/Models/Prioridad.php`, `app/Models/User.php`
- Migrations: `database/migrations/*_create_tickets_table.php`, `*_create_prioridads_table.php`
- Seeders: `database/seeders/*`
- Frontend build: `webpack.mix.js`, `resources/js/app.js`, `resources/css/app.css`, `package.json`

When making code changes
------------------------

- Preserve the existing controller request/response patterns (validate -> create/update model -> redirect with flash message).
- Update fillable arrays in models if you add new mass-assignable fields.
- Run `php artisan migrate` and `php artisan db:seed` locally after schema changes. Update seeders if you rely on test data.
- Run `php artisan test` / `vendor/bin/phpunit` and `npm run dev` to ensure front-end assets compile when you change JS/CSS.

If anything is unclear or you'd like me to expand any section (e.g., include exact view paths, fix migrations, or add example unit tests), tell me which area and I'll iterate.
