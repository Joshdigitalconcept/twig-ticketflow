<?php
// public/index.php

require_once __DIR__ . '/../vendor/autoload.php';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Setup Twig
$loader = new FilesystemLoader(__DIR__ . '/../templates');
$twig = new Environment($loader, [
    'cache' => __DIR__ . '/../storage/cache',
    'debug' => true,
]);

// // Simple route simulation
// $uri = $_SERVER['REQUEST_URI'];
// $uri = strtok($uri, '?'); // Remove query string

// Simple route simulation
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); // Clean URL

// Default page
$page = 'landing';

if ($uri === '/' || $uri === '/index.php') {
    $page = 'landing';
} elseif ($uri === '/auth/login') {
    $page = 'auth/login';
} elseif ($uri === '/auth/signup') {
    $page = 'auth/signup';
} elseif ($uri === '/dashboard') {
    $page = 'dashboard';
} elseif ($uri === '/tickets') {
    $page = 'tickets/index';
} elseif ($uri === '/tickets/create') {
    $page = 'tickets/create';
} elseif (preg_match('#^/tickets/edit/(\d+)$#', $uri, $matches)) {
    $page = 'tickets/edit';
} else {
    // Optional: 404 page
    http_response_code(404);
    $page = 'landing';
}

// Render
echo $twig->render("$page.twig", [
    'page' => $page,
    'uri' => $uri
]);