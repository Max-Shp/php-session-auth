<?php
session_start();

if (!empty($_SESSION['username'])) {
    // Если имя пользователя сохранено в сессии – приветствуем пользователя и выводим ссылку для выхода
    echo "<h1>Привет, " . htmlspecialchars($_SESSION['username']) . "!</h1>";
    echo '<a href="exit.php">Выйти</a>';
} else {
    // Если имени нет, подключаем внешний файл с информацией об авторе и формой ввода
    include 'template.php';
}