<?php
// counter.php — простой счётчик скачиваний
$counterFile = 'download_counter.txt';
$initialValue = 15; // ваши тестовые скачивания

// Создаём файл с начальным значением, если его нет
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, $initialValue);
}

$action = $_GET['action'] ?? '';

if ($action === 'get') {
    // Просто вернуть текущее значение
    echo file_get_contents($counterFile);
} elseif ($action === 'increment') {
    // Увеличить счётчик и вернуть новое значение
    $count = (int)file_get_contents($counterFile);
    $count++;
    file_put_contents($counterFile, $count);
    echo $count;
} else {
    echo '0';
}
?>
