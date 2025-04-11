@php
	$iconPath = null;

 if ($icon = $getState()) {
     if (str_starts_with($icon, 'fas-')) {
         $iconPath = base_path("vendor/owenvoke/blade-fontawesome/resources/svg/solid/" . str_replace('fas-', '', $icon) . ".svg");
     } elseif (str_starts_with($icon, 'fab-')) {
         $iconPath = base_path("vendor/owenvoke/blade-fontawesome/resources/svg/brands/" . str_replace('fab-', '', $icon) . ".svg");
     } elseif (str_starts_with($icon, 'far-')) {
         $iconPath = base_path("vendor/owenvoke/blade-fontawesome/resources/svg/regular/" . str_replace('far-', '', $icon) . ".svg");
     }
 }
@endphp
<div class="filament-icon-picker-icon-column px-4 py-3">
	@if($icon && $iconPath && file_exists($iconPath))
		<x-icon class="h-6" name="{{ $icon }}" />
	@endif
</div>