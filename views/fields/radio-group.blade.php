@component('bs::fields.base', [
    'label' => $label ?? '',
    'name' => $name,
    'formGroupClass' => $formGroupClass ?? '',
    'after' => $after ?? null,
    'before' => $before ?? null
])
    @foreach($options as $key => $text)
        <label class="custom-control custom-radio">
            <input type="radio" class="custom-control-input" name="{{ $name }}" value="{{ $key }}" 
                @if(($value ?? null) === $key) checked @endif>
            <div class="custom-control-label">{{ $text }}</div>
        </label>
    @endforeach
@endcomponent