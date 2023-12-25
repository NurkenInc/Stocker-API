<?php
require_once ROOT . "shared/ui/logo/ui.php";
require_once ROOT . "shared/ui/button/ui.php";
?>

<header class="px-6 py-4 bg-orange-500 text-white shadow-md">
  <div class="flex items-center justify-between">
    <div class="flex items-center space-x-2">
      <?php echo Logo() ?>
      <h1 class="text-lg font-semibold">Stocker</h1>
    </div>
    <div class="flex justify-center align-center gap-4">
      <?php echo Button(
        content: "Contribute",
        variant: "outline",
        type: "button",
        styles: "text-orange-600 bg-white border-orange-600 hover:text-black hover:bg-orange-400"
        ) ?>
      <?php echo Button(
        content: "Get Api Key",
        variant: "filled",
        type: "button",
        styles: "text-white bg-orange-600 border-none hover:bg-orange-700 text-xs"
      ) ?>
    <div>
  </div>
</header>