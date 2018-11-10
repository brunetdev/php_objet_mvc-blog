# Simple blog en PHP MVC


## Description

Ce blog PHP a un modèle MVC. Il utilise Trait PHP 5.4 et PDO (PHP 5.1) ainsi que la fonctionnalité de hachage du mot de passe PHP (PHP 5.5).

Ce projet a été réaliser sans framework dans le cadre de ma formation pour apprendre le PHP orienté objet.

Il est composé d'une parti admin ou l'utilisateur peut poster des articles et d'une parti visiteur ou celui-ci peut visualisé les articles.


## Pourquoi ce blog?

J'ai voulu faire un site web, agréable, propre et très utile pour démarrer sur de bonnes bases.
Il permet d'économiser du temps et donc de l'argent lors de demande de développement future pour un client potentiel.

En effet si un jours j'ai besoin de créer un blog, ce projet peut être utilisé comme cadre pour démarrer un projet avec un modèle de développement pratiques et bien organisé.


## Besoins requis pour le projet

### Description

* Le projet est écrit en PHP orienté objet version 7.1.
* Il est entièrement écrit à la main, pas de framework ou de bibliothèque existant
* Il a une bonne sécurité (par exemple, mots de passe hachés, protection contre l'injection SQL)
* Il utilise une base de données MySQL pour stocker les données du compte administrateur et les articles


#### le Frontend

* Liste des articles de blog présentant le titre , le corps tronqué à 100 caractères et la date . Il montre que les 5 derniers articles
* Affiche les articles avec le titre , le corps de l'article et sa date d'édition

#### The Backend

* Liste tous les articles du blog
* Ajouter un nouvel article de blog avec un titre et le contenu de l'article. Le titre ne peut avoir maximum 50 caractères
* Modifier un article de blog existant
* Supprimer un article
* Connexion et déconnexion de l'administrateur


## chose à faire 

La mise en page est très sommaire et nécessite un travail de design

## The Author

[Jonathan Brunet](http://www.brunetdev.com)


## Contact the Author

By email at: *brunetdev@gmail.com*
