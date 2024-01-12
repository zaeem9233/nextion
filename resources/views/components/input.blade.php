<div class="form-group mt-4">
    {{-- <label for="{{$id}}">{{$title}}</label> --}}
    <input type="{{$type}}" name="{{$name}}" id="{{$id}}" value="{{ ($value != null)? $value: null }}" placeholder="{{$title}}" class="form-control" />

    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>