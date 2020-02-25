@component('bs::fields.base', [
    'label' => $label ?? '',
    'name' => $name,
    'formGroupClass' => $formGroupClass ?? '',
    'after' => $after ?? null,
    'before' => $before ?? null
])
    <select class="form-control form-control-blend-in select2 {{ $class ?? '' }} {{ $errors->has($name) ? 'is-invalid' : '' }}" 
            id="{{ $name }}"
            name="{{ $name }}"
            @if($disabled ?? false) disabled @endif
            @if($width ?? null) data-width="{{ $width }}" @endif
            data-container-css-class="{{ $select2Class ?? '' }}"
            data-placeholder="{{ $placeholder ?? '' }}">
        @foreach($options as $key => $text)
            <option value="{{ $key }}" @if(($value ?? null) == $key) selected @endif>{{ $text }}</option>
        @endforeach
    </select>
@endcomponent