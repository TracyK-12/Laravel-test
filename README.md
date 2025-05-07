## Laravel Reservation Project
Ce projet est une application Laravel permettant de gérer des propriétés et des réservations.

## Fonctionnalités
=> Authentification avec Laravel Breeze

=>Interface utilisateur avec affichage des propriétés

=>Réservation via un composant Livewire

=>Panneau d'administration avec Filament :

=>Gestion des propriétés (ajout, modification, suppression)

=>Gestion des réservations

## Technologies utilisées
=>Laravel 12

=>Tailwind CSS

=>Livewire

=>Filament Admin Panel

=>SQLite

## Installation
-- Cloner le dépôt
bash
Copier
Modifier
git clone https://github.com/TracyK-12/Laravel.git
cd Laravel
-- Installer les dépendances
bash
Copier
Modifier
composer install
npm install && npm run dev
-- Copier le fichier d'environnement
bash
Copier
Modifier
cp .env.example .env
php artisan key:generate
-- Lancer les migrations
bash
Copier
Modifier
php artisan migrate
-- Démarrer le serveur
bash
Copier
Modifier
php artisan serve
-- Accéder à l'application
Frontend : http://127.0.0.1:8000

Admin : http://127.0.0.1:8000/admin

## Création d’un utilisateur admin
bash
Copier
Modifier
php artisan make:filament-user

## Remarques
Les réservations peuvent être faites depuis la page d’accueil.

Les données sont visibles et gérées via le panneau admin.

