<?php 
function Button(
  string $content = "", 
  string $variant="outline", 
  string $type = "button", 
  string $formId = "",
  string $styles = ""
) {
  switch ($variant) {
    case "outline":
      return <<<HTML
        <button
          class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2 w-full border bg-background hover:bg-accent hover:text-accent-foreground text-[#ff5722] border-[#ff5722] hover:bg-orange-600 hover:text-white duration-250 transition-all $styles"
          type="$type"
        >
          $content
        </button>
      HTML;
    case "filled":
      return <<<HTML
        <button
          class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2 w-full bg-orange-500 hover:bg-orange-600 text-white duration-250 transition-all $styles"
          type="$type"
        >
          $content
        </button>
      HTML;
    default:
      return <<<HTML
        <button 
          class="inline-flex items-center justify-center text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3 text-[#ff5722] border-[#ff5722] $styles"
          form="$formId"
          type="$type"
        >
          $content
        </button>
      HTML;
  }
}
?>