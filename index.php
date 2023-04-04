<?php
require_once 'config.php';
require_once 'controllers/BlogController.php';

$controller = new BlogController();

$route = $_SERVER['REQUEST_URI'];

var_dump($route);

if ($route == '/maitap/' || $route == '/maitap//index.php') {
    $controller->index();
} elseif ($route == '/maitap/create-post') {
    $controller->createPost();
} elseif ($route == '/maitap/save-post') {
    $controller->savePost();
} elseif (preg_match('/maitap/\/post\/(\d+)/', $route, $matches)) {
    $controller->showPost($matches[1]);
} elseif (preg_match('/maitap/\/edit-post\/(\d+)/', $route, $matches)) {
    $controller->editPost($matches[1]);
} elseif (preg_match('/maitap/\/update-post\/(\d+)/', $route, $matches)) {
    $controller->updatePost($matches[1]);
} elseif (preg_match('/maitap/\/delete-post\/(\d+)/', $route, $matches)) {
    $controller->deletePost($matches[1]);
}
