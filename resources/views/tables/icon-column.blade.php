<div class="filament-icon-picker-icon-column px-4 py-3">
	@php
		$validator = new class {
      use \Guava\FilamentIconPicker\Forms\Concerns\HasIconValidation;
  };

  $icon = $getState();
  $validIcon = $validator->validateIconName($icon);
	@endphp
	@if($validIcon)
		<x-icon class="h-6" name="{{$validIcon}}"/>
	@endif
</div>