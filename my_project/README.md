my_project
==========

My first Symfony project created on May 14, 2016, 6:38 pm.

##Run project
```
$ app/console server:run
```
go to:
```
http://localhost:8000/
```

###database
  - 'funday'

  ```
  $ app/console doctrine:database:create
  ```

##Packages
-[FOSUserBundle](http://symfony.com/doc/current/bundles/FOSUserBundle/index.html)
- The goal of this bundle is to persist some User class to a database (MySql, MongoDB, CouchDB, etc)

```
 new FOS\UserBundle\FOSUserBundle(),
 ```
 You now can log in at http://app.com/app_dev.php/login!





####[Patrick Tunga-Lergo](https://github.com/ptlergo/symfonyKick/tree/master/my_project)
