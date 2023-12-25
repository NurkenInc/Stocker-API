<?php
require_once "../app/config/index.php";

require_once ROOT . "shared/ui/button/ui.php";
require_once ROOT . "shared/ui/card/ui.php";

$overview = <<<HTML
  <p>
    Our API allows you to fetch product data, make orders, track shipments, and more. You can use it to create
    your own online store, mobile application, or custom solution.
  </p>
HTML;

$authentication = <<<HTML
  <p>
    To use our API, you'll need to authenticate each request with your API key. You can obtain this key from
    your account dashboard.
  </p>
HTML;

$endpoints = <<<HTML
  <p>
    We offer various endpoints to fetch product data, place orders, and more. Detailed information about each
    endpoint can be found in the subsequent sections.
  </p>
HTML;

$reqAndRes = <<<HTML
  <p>
    Check out our examples to see how you can make requests to our API and what responses you can expect.
    Remember to replace the placeholders with your actual data.
  </p>
HTML;

$faq = <<<HTML
  <p>
    If you have any questions about our API, check out the FAQ section. If you can't find your answer there,
    feel free to contact us.
  </p>
HTML;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stocker API | Api Key</title>

  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div>
    <?php require ROOT . "widgets/header/ui.php" ?>
    <main class="bg-[#fff3e0] min-h-screen p-6">
      <header class="flex flex-col items-center justify-center gap-4 text-center">
        <h1 class="text-4xl font-bold text-[#ff5722]">Stocker - Public Products Online Shop API</h1>
        <p class="max-w-[700px] text-gray-500 dark:text-gray-400">
          Welcome to our API documentation. Here, you'll find all you need to integrate with our products and services.
        </p>
      </header>
      <section class="mt-16 flex flex-col gap-5">
        <?php echo Card("Overview", $overview) ?>
        <?php echo Card("Authentication", $authentication) ?>        
        <?php echo Card("Endpoints", $endpoints) ?>        
        <?php echo Card("Request &amp; Response Examples", $reqAndRes) ?>        
        <?php echo Card("Frequently Asked Questions", $faq) ?>        
      </section>
      <footer class="mt-16 flex gap-4">
        <?php echo Button("Get Started") ?>
        <?php echo Button("Documentation") ?>
      </footer>
    </main>
    <?php require ROOT . "widgets/footer/ui.php" ?>
  </div>
</body>
</html>