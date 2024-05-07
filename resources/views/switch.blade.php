<!-- resources/views/switch.blade.php -->

<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <div class="custom-control custom-switch">
        <input type="checkbox" class="custom-control-input" id="{{ $name }}" name="{{ $name }}" {{ $checked ? 'checked' : '' }}>
        <label class="custom-control-label" for="{{ $name }}"></label>
    </div>
</div>
