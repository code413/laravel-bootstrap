<div class="form-group {{ $formGroupClass ?? '' }}">
    @if(!empty($label))
        <label for="{{ $name ?? '' }} ">{{ $label }}</label>
    @endif
    {{ $before ?? '' }}

    @if(isset($slot) && !empty(trim($slot)))
        {{ $slot }}
    @else
        <input type="{{ $type ?? 'text' }}"
               name="{{ $name ?? '' }}"
               id="{{ $name ?? '' }}"
               value="{{ $value ?? '' }}"
               class="form-control form-control-blend-in {{ $errors->has($name ?? '') ? 'is-invalid' : '' }} {{ $class ?? '' }}"
               placeholder="{{ $placeholder ?? '' }}"
               style="{{ $style ?? '' }}"
               @if($maxlength ?? null) maxlength="{{ $maxlength }}" @endif
               @if($inputmask ?? null) data-inputmask="{{ $inputmask }}"@endif>
    @endif
    {{ $after ?? '' }}
    @if($errors->has($name ?? ''))
        <div class="invalid-feedback">
            {{ $errors->first($name ?? '') }}
        </div>
    @endif
</div>