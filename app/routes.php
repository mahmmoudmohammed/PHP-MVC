<?php
$routes = array(
    '/' => 'HomeController@index',
    '/user' => 'UserController@index',
);

$path = $_SERVER['REQUEST_URI'];
if (array_key_exists($path, $routes)) {
    $route = $routes[$path];
    $parts = explode('@', $route);
    $controller = $parts[0];
    $method = $parts[1];
    require_once '../app/Controllers/' . $controller . '.php';
    $controller = new $controller();
    $controller->{$method}();
} else {
    header('HTTP/1.1 404 Not Found');
    echo '404 Not Found';
}


?>