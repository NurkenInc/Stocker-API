<?php
require_once "../app/config/index.php";

require_once ROOT . "shared/ui/button/ui.php";
require_once ROOT . "shared/ui/card/ui.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stocker API | About</title>

  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div>
    <?php require ROOT . "widgets/header/ui.php" ?>
    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12 bg-[#FF6B20]">
      <div class="relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="absolute inset-0 bg-gradient-to-r from-[#FF6B20] to-[#FF8A48] shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl"></div>
        <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
          <div class="max-w-md mx-auto">
            <div>
              <h1 class="text-2xl font-semibold">Stocker API</h1>
            </div>
            <div class="divide-y divide-gray-200">
              <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                <p>
                  An open-source API for creating ecommerce applications. This API includes products, orders, carts, and
                  users entities. You need to register and provide an API key for usage.
                </p>
                <p>Contributions are welcome. This project is licensed under the MIT license.</p>
                <ul class="list-disc space-y-2">
                  <li class="flex items-start">
                    <span class="h-6 flex items-center sm:h-7">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="flex-shrink-0 h-5 w-5 text-[#FF6B20]"
                      >
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <p class="ml-2 text-sm leading-5 text-gray-500">
                      <strong>Pagination:</strong> Our API supports pagination for managing large sets of data.
                    </p>
                  </li>
                  <li class="flex items-start">
                    <span class="h-6 flex items-center sm:h-7">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="flex-shrink-0 h-5 w-5 text-[#FF6B20]"
                      >
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <p class="ml-2 text-sm leading-5 text-gray-500">
                      <strong>Documentation:</strong> Comprehensive guides and documentation are available.
                    </p>
                  </li>
                  <li class="flex items-start">
                    <span class="h-6 flex items-center sm:h-7">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="flex-shrink-0 h-5 w-5 text-[#FF6B20]"
                      >
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <p class="ml-2 text-sm leading-5 text-gray-500">
                      <strong>Support:</strong> Get help and support from the community.
                    </p>
                  </li>
                  <li class="flex items-start">
                    <span class="h-6 flex items-center sm:h-7">
                      <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="24"
                        height="24"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        class="flex-shrink-0 h-5 w-5 text-[#FF6B20]"
                      >
                        <polyline points="20 6 9 17 4 12"></polyline>
                      </svg>
                    </span>
                    <p class="ml-2 text-sm leading-5 text-gray-500">
                      <strong>Updates:</strong> Stay informed with the latest updates.
                    </p>
                  </li>
                </ul>
              </div>
              <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                <p>Want to dig deeper into our API?</p>
                <p>
                  <a class="text-[#FF8A48] hover:text-[#FF6B20] sm:text-2xl" href="#">
                    Read the documentation →
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require ROOT . "widgets/footer/ui.php" ?>
  </div>
</body>
</html>