# Nihongo Ima
_Japanese Vocab Online_


An online list of beginner Japanese vocabulary, built using a MVC arch from scratch.

MVC guidance from [Tania's Laconia](https://github.com/taniarascia/laconia) project.



------------------------------- local database -------------------------------

_The following guide uses PHPMyAdmin. Any database server should work, but the steps may differ from below_

1. start up XAMPP -> MySQL
2. go to [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/) in your browser (or click the **Admin** button in XAMPP -> MySQL)
3. create a **new database** named **nihongo_ima** (if using a different name, change line:22 in *nihongo_ima.sql* and line:7 of *config.example.php* accordingly)
4. change the collation to **utf8mb4_general_ci**
5. click **create database**
6. after creation, go to the **Import** tab on the top navigation
7. choose the *nihongo_ima.sql* file to import, and click **go** at the bottom
8. your new database should be populated now with the **nouns**, **adjectives**, and **verbs** table