<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museum Gallery</title>
    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/main.js" defer></script>
    <script src="/js/sliders.js" defer></script>
    <script src="/js/events.js" defer></script>
</head>
<body>
    <?php include_once '../../../templates/header.php'; ?>

    <div class="gallery-container">
        <h1>Gallery</h1>
        <div class="gallery-items">
            <?php
            // Assuming $items is an array of gallery items passed from the controller
            foreach ($items as $item) {
                echo '<div class="gallery-item">';
                echo '<img src="/uploads/' . htmlspecialchars($item['image']) . '" alt="' . htmlspecialchars($item['title']) . '">';
                echo '<h2>' . htmlspecialchars($item['title']) . '</h2>';
                echo '<p>' . htmlspecialchars($item['description']) . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </div>

    <?php include_once '../../../templates/footer.php'; ?>
</body>
</html>