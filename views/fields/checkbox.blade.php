@component('bs::fields.base', [
    'label' => null,
    'name' => $name,
    'formGroupClass' => $formGroupClass ?? '',
    'after' => $after ?? null,
    'before' => $before ?? null
])
    <label class="custom-control custom-checkbox d-flex">
        <input type="checkbox" class="custom-control-input" name="{{ $name }}" value="{{ $value ?? 1 }}" 
               @if($checked ?? false) checked @endif>
        <span class="custom-control-label">{{ $label }}</span>
    </label>
@endcomponent
