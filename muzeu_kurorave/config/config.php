<?php
// Configuration settings for the museum gallery application

// Database configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'museum_gallery');
define('DB_USER', 'your_username');
define('DB_PASS', 'your_password');

// Other configuration settings
define('BASE_URL', 'http://yourdomain.com/museum-gallery/public');
define('UPLOAD_DIR', __DIR__ . '/../public/uploads/');
define('ITEMS_PER_PAGE', 10);
?>