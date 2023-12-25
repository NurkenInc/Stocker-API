<?php
require_once ROOT . "shared/ui/logo/ui.php";
require_once ROOT . "shared/ui/input/ui.php";
require_once ROOT . "shared/ui/button/ui.php";
?>

<form 
  class="w-full flex flex-col items-center justify-center min-h-screen bg-[#FFFAF0] text-black"
  method="POST" 
  form="sign-up-form"
  action="/"
>
  <div class="border bg-white text-card-foreground w-full max-w-sm m-10 p-6 rounded-lg shadow-lg">
    <div class="flex justify-center">
      <?php echo Logo("text-black h-8 w-8") ?>
    </div>
    <div class="flex flex-col space-y-1.5 py-3 px-6 mb-4 text-center text-orange-500">
      <h1 class="text-2xl font-bold">Login to Stocker API</h1>
    </div>
    <div class="pb-6 px-6">
      <div class="space-y-4">
        <?php echo Input(
          label: "Telegram Username",
          placeholder: "@yourusername",
          name: "tusername",
          id: "tusername",
          type: "text",
          required: true,
        ) ?>
        <?php echo Input(
          label: "Password",
          placeholder: "Enter password",
          name: "password",
          id: "password",
          type: "password",
          required: true,
        ) ?>
        <?php echo Button("Sign In", "filled", "submit", "sign-up-form") ?>
      </div>
    </div>
    <div class="text-left">
      <p class="text-gray-500">
        Don't have an account?
        <a class="text-orange-500 underline" href="#">
          Sign up
        </a>
      </p>
    </div>
  </div>
</form>