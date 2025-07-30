#! /user/bin/env php 
<?php

use GithubActivity;
// la première ligne est un shebang qui permet d'executer le fichier en tant que script PHP
// php src/cli.php <commande> <arg> <arg2> => permet de lancer le script
require __DIR__ . '/../vendor/autoload.php';

// $argv est une variable globale. Contient les arguments passé dans la ligne de commande

// on récupérer les valeurs depuis la variable globale. Si elle n'existe pas, on passe null.
$command = $argv[1] ?? null;
$arg1 = $argv[2] ?? null;
$arg2 = $argv[3] ?? null;

echo "Commande :" . $command . PHP_EOL;
echo "Argument 1 :" . $arg1 . PHP_EOL;
echo "Argument 2 :" . $arg2 . PHP_EOL;  

// on viens ensuite choper la commande et appeller la méthode correspondantes.
switch($command){
  case "github-activity":
    break;
  case "help":
      $cli = new GithubActivity;
      $cli->displayHelp();
      break;
}