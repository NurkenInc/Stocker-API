<?php 
function Input(
  string $label = "", 
  string $placeholder = "", 
  string $id = "",
  string $name = "",
  string $type = "text",
  bool   $required = false,
  string $styles = "",
) {
  $requiredClass = $required ? "required" : "";

  return <<<HTML
    <div class="space-y-2 $requiredClass">
      <label
        class="text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-orange-500"
        for="$id"
      >
        $label
      </label>
      <input
        placeholder="$placeholder"
        class="flex h-10 w-full rounded-md border bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 border-orange-500 focus:ring-2 focus:ring-orange-500 focus:outline-none $styles"
        required="$required"
        type="$type"
        name="$name"
        id="$id"
      />
    </div>
  HTML;
}
?>