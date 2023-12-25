<?php
require_once ROOT . "shared/ui/logo/ui.php";
require_once ROOT . "shared/ui/input/ui.php";
require_once ROOT . "shared/ui/button/ui.php";
?>

<form 
  class="w-full h-full bg-[#FFFAF0] flex justify-center items-center py-5"
  method="POST" 
  form="sign-in-form"
  action="/"
>
  <div class="border text-card-foreground w-96 p-8 my-10 bg-white shadow-lg rounded-lg">
    <div class="flex justify-center">
      <?php echo Logo("text-black h-8 w-8") ?>
    </div>
    <div class="flex flex-col space-y-1.5 py-3 px-6 mb-4 text-center text-orange-500">
      <h1 class="text-2xl font-bold">Register into Stocker API</h1>
    </div>
    <div class="p-6">
      <div class="space-y-4">
        <?php echo Input(
          label: "Username",
          placeholder: "Enter username",
          name: "username",
          id: "username",
          type: "text",
          required: true,
        ) ?>
        <?php echo Input(
          label: "Email",
          placeholder: "example@gmail.com",
          name: "email",
          id: "email",
          type: "email",
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
        <?php echo Input(
          label: "Telegram Username",
          placeholder: "@yourusername",
          name: "tusername",
          id: "tusername",
          type: "text",
          required: true,
        ) ?>
        <?php echo Button("Sign Up", "filled", "submit", "sign-in-form") ?>
      </div>
      <div class="mt-4 text-left">
        <p class="text-gray-500">
          Already have an account?
          <a class="text-orange-500 underline" href="#">
            Sign in
          </a>
        </p>
      </div>
    </div>
  </div>
</form>