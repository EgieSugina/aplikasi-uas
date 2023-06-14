<?php
// include './components/islogin.php' 
$routes = [
    '' => './views/login.php',
    'login' => './views/login.php',
    'logout' => './components/logout.php',
    'admin/home' => './views/admin/home.php',
    'admin/ruangan' => './views/admin/ruangan.php',
    'home' => './views/tamu/home.php',
    'myreservations' => './views/tamu/myreservations.php',

];
$url = $_SERVER['REQUEST_URI'];
$scriptDir = dirname($_SERVER['SCRIPT_NAME']);
$url = str_replace($scriptDir, '', $url);
$route = parse_url($url, PHP_URL_PATH);
$route = rtrim(ltrim($route, '/'), '/');
if (array_key_exists($route, $routes)) {
    $handlerFile = $routes[$route];
    include $handlerFile;
} else {
    echo '404 - Page Not Found';
}
?>