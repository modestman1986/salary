<?Php

// Chargement des dépendances avec le fichier 'autoload' de php, permet de charger 
// les controllers, les models, les classes utiles au code et les vues
require __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

// Route vers la page d'accueil
$router->map('GET','/',['controller' => 'MainController','method' => 'homeAction',],'home');

// Route vers la page des créateur de Sonic
//$router->map('GET','/createurs',['controller' => 'MainController','method' => 'creatorsAction',],'creators');

// Route vers la page des créateur de Sonic
//$router->map('GET','/personnage/[i:id]',['controller' => 'MainController','method' => 'characterAction',],'character');

// Route vers la page de test des controllers et méthodes
$router->map('GET','/test',['controller' => 'MainController','method' => 'testAction',],'test');

// Définition de la racine de notre projet
$router->setBasePath($_SERVER['BASE_URI']);

// La méthode match renvoie un tableau
$match = $router->match();

if ($match !== false) {
  // On récupère le tableau correspondant à la route recherchée
  $routeInfos = $match['target'];

  // On récupère dans ce tableau le contrôleur à utiliser et la méthode à appeler
  $controllerToUse = '\\Salary\\Controllers\\' . $routeInfos['controller'];
  $method = $routeInfos['method'];
  $params = $match['params'];

  // On crée une nouvelle instance de notre contrôleur qu'on stocke dans une variable (C'est un objet)
  $controller = new $controllerToUse();
  // $controller = new MainController();

  // On prend l'objet contrôleur créé et on on exécute la méthode dessus
  $controller->$method($params);
  // $controller->homeAction();
} else {
  $controller = new \Salary\Controllers\MainController();
  $controller->pageNotFound();
}