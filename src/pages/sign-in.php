<?php
require_once "../app/config/index.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stocker API | Register</title>

  <link rel="stylesheet" href="../app/globals/main.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div>
    <?php require ROOT . "widgets/header/ui.php" ?>
    <?php require ROOT . ROOT . "features/auth/sign-in-form/ui.php" ?>
    <?php require ROOT . "widgets/footer/ui.php" ?>
  </div>
</body>
</html>