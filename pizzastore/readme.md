# Pizza Store PDO SQL

- Récupérer un backup de la BDD pizzastore
L'intérêt est de pouvoir recréer la structure de la base à tout moment.

Au niveau du PHP, on va créer quelques fichiers / dossiers :
- config/database.php (connexion à la base de donées en PDO, sera inclus dans tous les fichiers PHP)
- config/config.php (contiendra les variables "globales au site" ex:titre du site, titre de la page, page       courante, etc.)
- index.php (page d'accueil du site)
- partials/header.php
- partials/footer.php
- pizza_list.php (lister toutes les pizzas de la base de données)
- pizza_single.php (la page d'une pizza seule)

Au niveau du front :
- assets/ (dossier qui contiendra le cs, le js, les images)