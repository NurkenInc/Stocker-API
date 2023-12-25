<?php 
function Card(string $title = "", string $content = "", string $styles = "") {
  return <<<HTML
    <div class="rounded-lg border text-card-foreground shadow-sm bg-white $styles" data-v0-t="card">
      <div class="flex flex-col space-y-1.5 p-6">
        <h3 class="text-2xl font-semibold leading-none tracking-tight">
          $title
        </h3>
      </div>
      <div class="p-6">
        $content
      </div>
    </div>
  HTML;
}
?>