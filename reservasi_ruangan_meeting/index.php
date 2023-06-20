<?php
// include './components/isindex.php' 
$routes = [
    '' => 'REQUEST_URI',
    'index.php' => 'REQUEST_URI',
    'index.php/login' => './views/login.php',
    'index.php/logout' => './components/logout.php',
    'index.php/admin/home' => './views/admin/home.php',
    'index.php/admin/ruangan' => './views/admin/ruangan.php',
    'index.php/home' => './views/tamu/home.php',
    'index.php/myreservations' => './views/tamu/myreservations.php',

];
$url = $_SERVER['REQUEST_URI'];
$scriptDir = dirname($_SERVER['SCRIPT_NAME']);
$url = str_replace($scriptDir, '', $url);
$route = parse_url($url, PHP_URL_PATH);
$route = rtrim(ltrim($route, '/'), '/');
if (array_key_exists($route, $routes)) {
    $handlerFile = $routes[$route];
    if ($handlerFile == 'REQUEST_URI') {
        header("location: index.php/login");
    } else {
        include $handlerFile;
    }
} else {
    echo '404 - Page Not Found';
}
?>