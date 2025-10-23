<?php
// This file provides a form for adding or editing gallery items.

require_once '../../Models/Item.php';

$item = new Item();
$action = 'add'; // Default action is to add a new item
$itemData = null;

if (isset($_GET['id'])) {
    $action = 'edit';
    $itemData = $item->getItemById($_GET['id']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo ucfirst($action); ?> Gallery Item</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
        <h1><?php echo ucfirst($action); ?> Gallery Item</h1>
        <form action="/src/Controllers/GalleryController.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="action" value="<?php echo $action; ?>">
            <?php if ($action === 'edit'): ?>
                <input type="hidden" name="id" value="<?php echo $itemData['id']; ?>">
            <?php endif; ?>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required value="<?php echo $itemData['title'] ?? ''; ?>">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" required><?php echo $itemData['description'] ?? ''; ?></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image" <?php echo $action === 'edit' ? '' : 'required'; ?>>
            </div>
            <button type="submit"><?php echo ucfirst($action); ?> Item</button>
        </form>
    </div>
    <script src="/js/main.js"></script>
</body>
</html>