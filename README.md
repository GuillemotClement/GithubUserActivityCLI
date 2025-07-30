# GithubUserActivityCLI
[Consigne](https://roadmap.sh/projects/github-user-activity)

Dans ce projet, vous créerez une interface de ligne de commande (CLI) simple pour récupérer l'activité récente d'un utilisateur GitHub et l'afficher dans le terminal. Ce projet vous permettra de mettre en pratique vos compétences en programmation, notamment en travaillant avec des API, en manipulant des données JSON et en créant une application CLI simple.

## Exigence 
L'application doit s'exécuter en ligne de commande, accepter le nom d'utilisateur GitHub comme argument, récupérer l'activité récente de l'utilisateur via l'API GitHub et l'afficher dans le terminal. 

L'utilisateur doit pouvoir :
- Fournissez le nom d’utilisateur GitHub comme argument lors de l’exécution de la CLI.
```shell
github-activity <username>
```
- Récupérez l'activité récente de l'utilisateur GitHub spécifié à l'aide de l'[API GitHub](https://docs.github.com/en/rest/activity/events?apiVersion=2022-11-28). Vous pouvez utiliser le point de terminaison suivant pour récupérer l'activité de l'utilisateur :
```shell
# https://api.github.com/users/<username>/events
# Example: https://api.github.com/users/kamranahmedse/events
```

- Affichez l'activité récupérée dans le terminal.
```php
Output:
- Pushed 3 commits to kamranahmedse/developer-roadmap
- Opened a new issue in kamranahmedse/developer-roadmap
- Starred kamranahmedse/developer-roadmap
- ...
```
- Gérez les erreurs avec élégance, telles que les noms d'utilisateur non valides ou les échecs d'API.
- N'utilisez aucune bibliothèque ou framework externe pour récupérer l'activité GitHub.

Si vous souhaitez développer une version plus avancée de ce projet, vous pouvez ajouter des fonctionnalités telles que le filtrage de l'activité par type d'événement, l'affichage de l'activité dans un format plus structuré ou la mise en cache des données récupérées pour améliorer les performances. Vous pouvez également explorer d'autres points de terminaison de l'API GitHub pour récupérer des informations supplémentaires sur l'utilisateur ou ses dépôts.