# Logopädie Praxis (Laravel Lernprojekt)

Dies ist mein Einstiegsprojekt in das Laravel-Framework. Ich entwickle diese Anwendung, um die Konzepte der modernen Webentwicklung mit Laravel – von der inkrementellen Datenbank-Entwicklung, über eine interaktive Oberfläche bis hin zur REST-API - praxisnah zu erlernen und anzuwenden.

## 🛠 Stand der Entwicklung

Das Projekt steht am Anfang und konzentriert sich aktuell einerseits auf die Kern-Logik:


- CRUD (Therapeuten)
- Auth (Registrierung/Login, nur selbst angelegte Therapeuten löschen/bearbeiten)

Andererseits auf eine saubere Architektur:

- Repository Pattern
- Komponentenbasierte UI
- saubere MVC-Trennung

## Installation

    composer install

    .env.example -> umbenenen zu -> .env

    php artisan key:generate

    php artisan migrate

    php artisan serve
