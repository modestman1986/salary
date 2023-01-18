<?php

// Chargement des dépendances via autoload de composer:
require __DIR__ . '/../vendor/autoload.php';

// Préparation d'Altorouter
$router = new AltoRouter();

// Définition de la racine de notre projet (path racine)
// Eviter absolument tout caractère spécial ou espace dans les noms des dossiers
$router->setBasePath($_SERVER['BASE_URI']);

//$router->map('GET','/',['controller' => 'MainController','method' => 'homeAction',],'home');

//$router->map('GET','/catalogue/categorie/[i:id]',['controller' => 'CatalogController','method' => 'categoryAction',], 'category' );

//$router->map('GET','/mentions-legales',['controller' => 'MainController','method' => 'legalNoticeAction',],'legal-notice');

// renvie un tableau avec plusieurs avec les index : target, method, params
$match = $router->match();

if ($match !== false) {
    // On récupère le tableau correspondant à la route recherchée
    $routeInfos = $match['target'];
  
    // On récupère dans ce tableau le contrôleur à utiliser et la méthode à appeler
    $controllerToUse = '\\Oshop\\Controllers\\' . $routeInfos['controller'];
    $method = $routeInfos['method'];
    $urlParams = $match['params'];
  
    // On crée une nouvelle instance de notre contrôleur qu'on stocke dans une variable (C'est un objet)
    $controller = new $controllerToUse();
    // $controller = new MainController();
  
    // On prend l'objet contrôleur créé et on on exécute la méthode dessus
    $controller->$method($urlParams);
    // $controller->homeAction();
  } else {
    $controller = new \Salary\Controllers\MainController();
    //$controller->pageNotFound();
}
