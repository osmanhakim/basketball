@if($name || $label)
<div class="col-md-6 col-sm-12 input">
    <label for="{{ $name }}">
        {{ $label }}
        @if($required)
        <span class="text-danger">*</span>
        @endif
    </label>
    <span class="switch switch-icon">
        <label>
            {{-- 1) always send “0” so field is present when unchecked --}}
            <input type="hidden" name="{{ $name }}" value="0" />

            {{-- 2) override to “1” when checked --}}
            <input type="checkbox" id="{{ $name }}" name="{{ $name }}" value="1"
                {{ old($name, $val) ? 'checked' : '' }} />
            <span></span>
        </label>
    </span>
</div>
@endif