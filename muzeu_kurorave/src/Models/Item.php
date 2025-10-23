<?php

class Item {
    private $id;
    private $name;
    private $description;
    private $image;
    private $createdAt;
    private $updatedAt;

    public function __construct($name, $description, $image) {
        $this->name = $name;
        $this->description = $description;
        $this->image = $image;
        $this->createdAt = new DateTime();
        $this->updatedAt = new DateTime();
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getImage() {
        return $this->image;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function setName($name) {
        $this->name = $name;
        $this->updatedAt = new DateTime();
    }

    public function setDescription($description) {
        $this->description = $description;
        $this->updatedAt = new DateTime();
    }

    public function setImage($image) {
        $this->image = $image;
        $this->updatedAt = new DateTime();
    }

    public function save($pdo) {
        if ($this->id) {
            $stmt = $pdo->prepare("UPDATE items SET name = ?, description = ?, image = ?, updated_at = ? WHERE id = ?");
            $stmt->execute([$this->name, $this->description, $this->image, $this->updatedAt->format('Y-m-d H:i:s'), $this->id]);
        } else {
            $stmt = $pdo->prepare("INSERT INTO items (name, description, image, created_at, updated_at) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$this->name, $this->description, $this->image, $this->createdAt->format('Y-m-d H:i:s'), $this->updatedAt->format('Y-m-d H:i:s')]);
            $this->id = $pdo->lastInsertId();
        }
    }

    public static function findAll($pdo) {
        $stmt = $pdo->query("SELECT * FROM items");
        return $stmt->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function findById($pdo, $id) {
        $stmt = $pdo->prepare("SELECT * FROM items WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchObject(self::class);
    }

    public function delete($pdo) {
        if ($this->id) {
            $stmt = $pdo->prepare("DELETE FROM items WHERE id = ?");
            $stmt->execute([$this->id]);
        }
    }
}