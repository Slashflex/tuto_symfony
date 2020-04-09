<h1 style="text-align: center">
    Composer required packages :
</h1>




|       Profiler        |        Twig        |                     Maker                     |                       Orm                        |
| :-------------------: | :----------------: | :-------------------------------------------: | :----------------------------------------------: |
| composer req profiler | composer req twig  |               composer req make               |                 composer req orm                 |
|       debugger        | moteur de template | creation de controller, tests, classes etc... | authorize la migration, création de tables etc.. |

```sh
# Créer un controller 
bin/console make:controller # puis suivre les instructions (première lettre en majuscule)
```



```sh
# Créer l'entité Article 
bin/console make:entity Article 
# penser a modifier la variable d'environement DATABASE_URL dans le fichier .env
DATABASE_URL=postgresql://UTILISATEUR:MOT_DE_PASSE@127.0.0.1:5432/NOM_DE_LA_BASE_DE_DONNEES?serverVersion=11&charset=utf8
```

```sh
# Créé la base de donnée dans postgresql
bin/console doctrine:database:create
```

```sh
# Effectue la migration
bin/console make:migration
```

```sh
# Créé la table Article
bin/console doctrine:migration:migrate
```

***

### Générer un CRUD rapide

```sh
bin/console make:crud Article # veiller à ne pas avoir de controller du même nom
```