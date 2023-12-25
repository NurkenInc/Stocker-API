<?php
function SideItem(
  string $entity = "in-dev", 
  bool $post = true,
  bool $put = true, 
  bool $delete = true,
  bool $patch = true,
  bool $get = true,
  ?string $label = null,
) {
  $itemLink = "/" . mb_strtolower($entity);
  $deleteLink = "/docs" . "/" . mb_strtolower($entity) . "/delete";
  $getLink = "/docs" . "/" . mb_strtolower($entity) . "/get";
  $patchLink = "/docs" . "/" . mb_strtolower($entity) . "/patch";
  $putLink = "/docs" . "/" . mb_strtolower($entity) . "/put";
  $postLink = "/docs" . "/" . mb_strtolower($entity) . "/post";

  $itemLabel = $label ?? ucfirst($entity);

  $postClass = $post ? "block" : "hidden";
  $putClass = $put ? "block" : "hidden";
  $deleteClass = $delete ? "block" : "hidden";
  $patchClass = $patch ? "block" : "hidden";
  $getClass = $get ? "block" : "hidden";

  return <<<HTML
    <li>
      <a class="text-orange-500 hover:text-gray-500 transition-all duration-250" href="$itemLink">
        $itemLabel
      </a>
    </li>
    <ul class="list-disc list-inside space-y-2 ml-4">
      <li class="$postClass">
        <a class="text-gray-500 hover:text-orange-500 transition-all duration-250" href="$postLink">
          POST
        </a>
      </li>
      <li class="$getClass">
        <a class="text-gray-500 hover:text-orange-500 transition-all duration-250" href="$getLink">
          GET
        </a>
      </li>
      <li class="$putClass">
        <a class="text-gray-500 hover:text-orange-500 transition-all duration-250" href="$putLink">
          PUT
        </a>
      </li>
      <li class="$patchClass">
        <a class="text-gray-500 hover:text-orange-500 transition-all duration-250" href="$patchLink">
          PATCH
        </a>
      </li>
      <li class="$deleteClass">
        <a class="text-gray-500 hover:text-orange-500 transition-all duration-250" href="$deleteLink">
          DELETE
        </a>
      </li>
    </ul>
  HTML;
}
?>