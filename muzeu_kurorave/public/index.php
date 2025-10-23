<?php
require_once '../src/Database/Connection.php';
require_once '../src/Controllers/GalleryController.php';
require_once '../src/Controllers/DashboardController.php';

// Initialize the application
$connection = new Connection();
$galleryController = new GalleryController($connection);
$dashboardController = new DashboardController($connection);

// Simple routing
$requestUri = $_SERVER['REQUEST_URI'];

if (strpos($requestUri, '/gallery') === 0) {
    $galleryController->index();
} elseif (strpos($requestUri, '/admin/dashboard') === 0) {
    $dashboardController->index();
} else {
    // Default to gallery index
    $galleryController->index();
}
?> 

