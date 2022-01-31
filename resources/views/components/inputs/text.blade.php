<div {{ $attributes }}>
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="text" class="form-control @error($name) is-invalid @enderror" @isset($id) id="{{ $id }}" @endisset
        name="{{ $name }}" value="{{ old($name) }}" @if($autofocus) autofocus @endif>
    @error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
    @enderror
</div>