<div class="form-group p-5">
    <label for="{{ $name }}" class="text-white">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $name }}" class="form-control border border-4" value="{{ old($name) }}">
    <span class="text-danger">
        @error($name)
            {{ $message }}
        @enderror
    </span>
</div>
