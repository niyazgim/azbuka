<div class="input_container">
  <input
  name="{{$name}}"
  type="{{$type ?? 'text'}}"
  placeholder="{{$placeholder ?? ''}}"
  >
  @error($name)
  <p class="error">{{$message}}</p>
  @enderror
</div>

