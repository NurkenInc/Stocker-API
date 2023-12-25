<?php
require_once ROOT . "shared/ui/button/ui.php";
require_once ROOT . "shared/ui/card/ui.php";
require_once ROOT . "shared/ui/input/ui.php";
require_once ROOT . "shared/ui/logo/ui.php";
?>

<main class="bg-[#fff3e0] min-h-screen p-6">
  <header class="flex flex-col items-center justify-center gap-4 text-center">
    <h1 class="text-4xl font-bold text-[#ff5722]">Stocker - Public Products Online Shop API</h1>
    <p class="max-w-[700px] text-gray-500 dark:text-gray-400">
      Welcome to our API documentation. Here, you'll find all you need to integrate with our products and services.
    </p>
  </header>
  <section class="mt-16">
    <div class="rounded-lg border text-card-foreground shadow-sm bg-[#ffe0b2]" data-v0-t="card">
      <div class="flex flex-col space-y-1.5 p-6 pb-4">
        <h3 class="text-2xl font-semibold leading-none tracking-tight text-[#ff5722]">Get API Key</h3>
      </div>
      <div class="p-6">
        <p>
          To use our API, you'll need to authenticate each request with your API key. You can obtain this key by
          filling the form below and clicking the 'Generate API Key' button.
        </p>
        <form 
          class="mt-8 flex flex-col gap-4"
          method="POST"
          action="/"
          id="get-api-key-form"
        >
          <?php echo Input(
            label: "Full name",
            placeholder: "Enter your full name",
            id: "fullname",
            name: "fullname",
            type: "text",
            required: true,
          ) ?>
          <?php echo Button(
            content: "Generate API Key",
            variant: "filled",
            type: "submit",
            formId: "get-api-key-form"
          ) ?>
        </form>
        <div class="mt-4 text-left">
          <p class="text-gray-500">
            Note: you should be logged in. Do not have an account yeat?
            <a class="text-orange-500 underline" href="#">
              Sign up
            </a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <footer class="mt-16">
    <button class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 text-[#ff5722] border-[#ff5722]">
      Back to Documentation
    </button>
  </footer>
</main>
