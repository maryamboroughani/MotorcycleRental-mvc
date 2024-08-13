# Documentation du Projet

## Page de Garde

### Nom du Projet : Motorcycle Rental System

#### Description
Le système de location de motos est une application web permettant la gestion des locations de motos. Les utilisateurs peuvent réserver des motos, consulter les détails des locations, et les administrateurs peuvent gérer les informations des motos et des locations.

### Modèle de Relation d'Entité (ERD)

![ERD](MotorcycleRental-mvc/public/img/ERD.png)

### Brève Description du Projet

Ce projet est une application de gestion de location de motos utilisant l'architecture MVC. Il permet aux utilisateurs de :

- Consulter les motos disponibles.
- Réserver une moto pour une période spécifique.
- Voir les détails de leurs réservations.

Les fonctionnalités pour les administrateurs incluent :

- Ajout, modification, et suppression de motos.
- Gestion des réservations des utilisateurs.
- Visualisation des détails des réservations.

### Liens Importants

- **WebDev** : [Lien vers le site WebDev](http://)
- **GitHub** : [Lien vers le dépôt GitHub](https://github.com/maryamboroughani/MotorcycleRental-mvc.git)


## Instructions d'Utilisation

1. Accédez à l'application via `http://localhost/MotorcycleRental-mvc`.
2. Utilisez les fonctionnalités disponibles pour gérer les motos et les locations.


---

**Auteur**: Maryam Boroughani
**Date**: 9/08/2024

MotorcycleRental-mvc/
├── public/
│   └── css/
│       └── style.css
├── views/
│   ├── layouts/
│   │   ├── footer.php
│   │   └── header.php
│   ├── home/
│   │   └── index.php
│   └── rental/
│       ├── create.php
│       ├── edit.php
│       ├── index.php
│       └── show.php
├── controllers/
│   ├── HomeController.php
│   └── RentalController.php
├── models/
│   ├── CRUD.php
│   └── Rental.php
├── providers/
│   ├── View.php
│   └── Validator.php
├── routes/
│   ├── Route.php
│   └── Web.php
├── config.php
├── motorcycle_shop.sql
├── .htaccess
└── index.php

