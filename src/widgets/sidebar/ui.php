<?php
require_once ROOT . "widgets/sidebar/item/ui.php";
?>

<aside class="bg-white w-64 px-6 py-4 shadow-md">
  <h2 class="text-lg font-semibold mb-4">Endpoints Schema</h2>
  <ul class="space-y-2">
    <?php echo SideItem(
      entity: "auth",
      label: "Registration | Login",
      delete: false,
      put: false,
      patch: false,
    ) ?>
    <?php echo SideItem("store") ?>
    <?php echo SideItem("cart") ?>
    <?php echo SideItem("order") ?>
    <?php echo SideItem("pay-order", label: "Pay Order") ?>
  </ul>
</aside>