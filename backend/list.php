<?php

$stringConnection = 'sqlite:' . __DIR__ . '/database.sqlite';

try {
    $pdo = new PDO($stringConnection);

    $stmt = $pdo->query("SELECT * FROM teste");
    $items = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo '<ul>';
    foreach ($items as $items) {
        echo '<li>#' . $item['id'] . '-' . $item['name'] . '</li>';
    }
    echo '</ul>';
} catch (PDOException $e) {
    echo 'error!';
    echo $e;
}