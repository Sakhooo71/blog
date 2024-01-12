# Prise de Notes

## Création d'un Projet 

```bash	
Symfony new blog --webapp



## Lancement et arrêt du serveur

```bash
cd blog
symfony server -d # pour lancer en arrière plan
symfony server:stop
```

## Configuration de la base de données 

Dans le fichier `.env`, on  modifie les informations de connexionx a la base de données.


## Configuration du serveur de mail

Avec mailtrap, un service gratuit de test de mil qui n'a aucun lien avec symfony.
On a mis en place la ligne de configutration dns un fichier `.env.local` pour ne pas que
les informations de connexion a mailtrap se retrouve sur le depot github


## Première commande avec symfony-cli

La base c'est  :

- être dans le dosiier du projet avec le terminal
- utiliser `symfony console` pour lancer une commande
- l'autre altenative est `php bin/console`



Afin de creer notre premier controlleur, nous avons tapez dans e terminal
commande suivante :

```bash
symfony console make:controller
```

Suite à cela un assistant nous demande le nom du controlleur (classe), nous avons 
choisi `PageController`

Le resultat a été la création d'un fichier `src/Controller/PageController.php` et d'un fichier
`templates/page/index.html.twig`. cette page est accesiible à l'adresse `http://127.0.0.1:8000/page `

Pour en faire notre page d'acceuil nous avons modifié le chemin de la route dans un fichier du controlleur.

```Php
// Avant
#[Route('/page', name: 'page')]

//Après
#[Route('/page', name: 'page_index')]




## Les extensions dans VScode

pour travailler plus facilement avec symfony, il est conseillé d'installer les extensions suivantes :

- PHP Intelephense
- Twig Language 2
- Namespace Resolver