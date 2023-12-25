<?php
require_once "../../app/config/index.php";

require_once ROOT . "shared/ui/card/ui.php";

$intro = <<<HTML
  <p>
    Welcome to the Online Ecommerce API. This API allows you to integrate your ecommerce application with our
    platform.
  </p>
HTML;

$endpoints = <<<HTML
  <ul class="list-disc list-inside space-y-2">
    <li>
      <a class="text-orange-500" href="#">
        GET /api/store
      </a>
      - Fetch all products
    </li>
    <li>
      <a class="text-orange-500" href="#">
        GET /api/store/:id
      </a>
      - Fetch a single product by ID
    </li>
    <li>
      <a class="text-orange-500" href="#">
        POST /api/store
      </a>
      - Create a new product
    </li>
    <li>
      <a class="text-orange-500" href="#">
        PUT /api/store/:id
      </a>
      - Update a product by ID
    </li>
    <li>
      <a class="text-orange-500" href="#">
        PATCH /api/store/:id
      </a>
      - Update a product partially by ID
    </li>
  </ul>
HTML;

$authentication = <<<HTML
  <p>
    All API requests require the use of an API key. To authenticate your request, add your API key to the
    header of the request.
  </p>
HTML;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stocker API | Docs | Overview</title>

  <link rel="stylesheet" href="../../app/globals/main.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="min-h-screen bg-orange-100 text-gray-900">
    <?php require ROOT . "widgets/header/ui.php" ?>
    <div class="flex">
      <?php require ROOT . "widgets/sidebar/ui.php" ?>
      <main class="px-6 py-4 space-y-8">
        <?php echo Card("Introduction", $intro) ?>
        <?php echo Card("Endpoints", $endpoints) ?>
        <?php echo Card("Authentication", $authentication) ?>
      </main>
    </div>
    <?php require ROOT . "widgets/footer/ui.php" ?>
  </div>
</body>
</html>