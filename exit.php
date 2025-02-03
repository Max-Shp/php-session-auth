<?php
session_start();

// Очищаем сессию – удаляем все переменные
session_unset();
session_destroy();

// Перенаправляем пользователя обратно на index.php
header("Location: index.php");
exit;