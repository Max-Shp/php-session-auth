<?php
session_start();

if (!empty($_POST['username'])) {
    // Сохраняем имя пользователя в сессию (с базовой обработкой для безопасности)
    $_SESSION['username'] = htmlspecialchars(trim($_POST['username']));
}

// Перенаправляем пользователя обратно на главную страницу
header("Location: index.php");
exit;
