<?php
require_once "controllers/TaskController.php";

$controller = new TaskController();

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['action'])) {
        $controller->handleRequest();
    } else {
        include "views/taskView.php";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->handleRequest();
}