<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Default route
$routes->get('/', 'Home::index');

// Authentication routes
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');
$routes->get('/logout', 'Auth::logout');

// Character lookup routes
$routes->get('/character', 'Home::character');
$routes->get('/character/(:segment)', 'Home::character/$1');

// Rankings routes
$routes->get('/rankings', 'Home::rankings');
$routes->get('/rankings/(:segment)', 'Home::rankings/$1');

// Wiki routes
$routes->get('/wiki', 'Home::wiki');
$routes->get('/wiki/(:segment)', 'Home::wiki/$1');

// News routes
$routes->get('/news', 'Home::news');
$routes->get('/news/(:num)', 'Home::news/$1');

// Game launcher route
$routes->get('/play', function() {
    return redirect()->to('http://your-game-client-url.com');
});

// Static pages
$routes->get('/download', function() {
    return view('templates/header', ['title' => 'Download - SacredAQ Reborn'])
         . view('static/download')
         . view('templates/footer');
});

$routes->get('/help', function() {
    return view('templates/header', ['title' => 'Help - SacredAQ Reborn'])
         . view('static/help')
         . view('templates/footer');
});

$routes->get('/terms', function() {
    return view('templates/header', ['title' => 'Terms of Service - SacredAQ Reborn'])
         . view('static/terms')
         . view('templates/footer');
});

$routes->get('/privacy', function() {
    return view('templates/header', ['title' => 'Privacy Policy - SacredAQ Reborn'])
         . view('static/privacy')
         . view('templates/footer');
});

// Admin routes (add authentication middleware)
$routes->group('admin', ['filter' => 'admin'], function($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('users', 'Admin::users');
    $routes->get('news', 'Admin::news');
    $routes->post('news/create', 'Admin::createNews');
    $routes->get('items', 'Admin::items');
    $routes->get('guilds', 'Admin::guilds');
});

// API routes for AJAX calls
$routes->group('api', function($routes) {
    $routes->get('character/(:segment)', 'Api::character/$1');
    $routes->get('rankings/(:segment)', 'Api::rankings/$1');
    $routes->get('news', 'Api::news');
    $routes->get('stats', 'Api::stats');
});