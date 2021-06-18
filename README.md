# LE PAYS - Cahier de charges 
Site informatif Le Pays

## Contexte
Mr DOE possède une entreprise de presse , il souhaite moderniser son journal local local "LE PAYS ".
pour cela , le client veut site soit simple d’utilisation et aussi agréable à la lecture que sa version papier.
Le directeur est très attaché au papier et au confort de lecture que peut fournir ce support.
 

## Besoins fonctionnels:
Pour la création de son site le client souhaite:

* Création d'un site internet sur Journal local "Le Pays" visant à moderniser la version papier actuelle afin de relayer les informations.

* Le client souhaite une site proche du format papier et au confort de lecture que peut fournir ce support .

* En effet ,le client veut un site simple d'utilisation et agréable à la lecture que sa version papier .

* Dans les catégories nous retrouverons les rubriques permettant d'accéder aux activités sportives et culturelle du pays .

* Facilité la consultation ou la recherche des articles de presses en misant sur la disposition des articles .

* En ce qui concerne la taxonomie du site , elle devra permettre une navigation des contenus de manière intuitive par catégorie ou par tags.

* Le client souhaite conserver le rôle premier du site qui est d'informer et de présenter les informations de manière chronologique afin de prioriser la une des informations du jour.

* Enfin le client souhaite atteindre des lecteurs plus jeune en rendant son site internet accessible sur Mobile.

## Réalisation du site:
Pour répondre à la demande du clients , il y'aura différentes tâches à réaliser :

* Le site devra contenir contenir 3 pages :
    * Une page " Accueil ", qui contiendra "La Une!" et les derniers articles posté .
    * Une page " Culture ", qui contiendra tous les évènements culturels locaux,
    * Une page "Sport ", qui contiendra tous les évènements sportives du pays.

* La taxonomie du site permettra de naviguer facilement entre les différents catégories et les différents tags :
    * Création de 2 catégories : " Culture " & "Sport"
    * Création en relation avec ses catégories : "nouvelle-calédonie" , "pays", "foot" , "volley" .

* Les plugins qu'il faudra installés :

* Sécurité:
    * Ajouté un plugin « WP Hide Secure »,
    * Changer le préfixe des tables
    * Masquer la version:
      function wp_version_remove_version() {
  return '';
  }
  add_filter('the_generator', 'wp_version_remove_version');

* Pour afficher du faux contenus:
    * Faker press

* Le site doit être responsif , pour rendre accessible à un plus large publics.

* Site rémoin : https://www.lemonde.fr/

* Url du site "Mon Pays" : http://oriane.devweb.cfa.nc/



## Navigation du site 
Le menu du site est composé de 2 pages : 
* Une page « Accueil », qui affiche les derniers articles du jour et la " A la Une !".
* Une page « Culture » qui affiche tous les articles de la catégorie Culture, 
* Une page « Sport » qui affiche tous les articles de la catégorie Sport.

Pour la réalisation du site nous avons utilisés HTML et CSS et Bootstrap. 

## Contraintes Techniques
* Le déploiement du site sur un serveur Web.




