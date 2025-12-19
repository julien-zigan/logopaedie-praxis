# Logopädie Manager (Laravel Lernprojekt)

Dies ist mein Einstiegsprojekt in das Laravel-Framework. Ich entwickle diese Anwendung, um die Konzepte der modernen Webentwicklung mit Laravel – von der inkrementellen Datenbank-Entwicklung bis hin zur REST-API - praxisnah zu erlernen und anzuwenden.

## 🛠 Stand der Entwicklung

Das Projekt steht am Anfang und konzentriert sich aktuell auf die Kern-Logik:

- API-Grundlagen: Erste funktionierende Endpunkte für die Verwaltung von Therapeuten und Patienten.
- Daten-Validierung: Sicherer Umgang mit Patientendaten (Geburtsdaten, gesetzliche Vertreter).
- Interface: Eine einfache, mit Tailwind CSS gebaute Übersicht zur Dokumentation der Schnittstellen.

## 🎓 Mein Ziel

Dieses Projekt soll meine Lernkurve in Laravel dokumentieren. Schritt für Schritt erweitere ich das System um weitere Funktionen, während ich mich tiefer in die Best Practices des Frameworks einarbeite.

## Installation

    composer install
    
.env & Datenbank konfigurieren, dann: 

    php artisan key:generate

    php artisan migrate

    php artisan serve
