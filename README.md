# Simple blog en PHP MVC 


## Description

Ce blog PHP a un modèle MVC. Il utilise Trait PHP 5.4 et PDO (PHP 5.1) ainsi que la fonctionnalité de hachage du mot de passe PHP (PHP 5.5).

Ce projet a été réaliser sans framework dans le cadre de ma formation pour apprendre le PHP orienté objet.

Il est composé d'une parti admin ou l'utilisateur peut poster des articles et d'une parti visiteur ou celui-ci peut visualisé les articles.


## Pourquoi ce blog?

J'ai voulu faire un site Web simple, agréable, propre et très utile pour démarrer sur de bonnes bases.
Il permet d'économiser du temps et donc de l'argent lors de demande de développement future pour un client potentiel.

En effet si un jours j'ai besoin de créer un blog, ce projet peut à nouveau être utilisé comme cadre pour démarrer un projet facilement avec un modèle de développement et des pratiques ainsi que une bonne organisation de développement .


## Besoins requis pour le projet

### Exigences

* Le projet est écrit en PHP orienté objet version 5.5 ou supérieure.
* Il est entièrement écrit à la main, pas de framework ou de bibliothèque existant
* Il a une bonne sécurité (par exemple, mots de passe hachés, protection contre l'injection SQL, ne doit pas avoir d'erreur lorsque nous essayons de changer les chaînes de requête d'URL ou de les pirater, etc.)
* Il utilise une base de données MySQL pour stocker les données de compte et d'article d'administrateur

### Spécification

*Construisez un blog simple avec les fonctionnalités suivantes*

#### The Frontend

* Liste des articles de blog présentant le titre , le corps tronqué à 100 caractères et la date . Il montre que les 5 derniers articles
* Article de blog unique montrant le titre , le corps entier et la date

#### The Backend

* Liste de tous les articles de blog
* Possibilité d'ajouter un nouvel article de blog avec un titre et un corps. Le titre ne peut avoir un maximum de 50 caractères
* Possibilité de modifier un article de blog existant
* Possibilité de supprimer un article
* Fonction de déconnexion pour l'administrateur


La mise en page est très sommaire et necessite un travail de design

## The Author

[Jonathan Brunet](http://www.brunetdev.com)


## Contact the Author

By email at: *brunetdev@gmail.com*
