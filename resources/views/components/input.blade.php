<div class="form-group ">
    <label for="{{$id}}">{{$title}}</label>
    <input type="{{$type}}" name="{{$name}}" id="{{$id}}" value="{{ ($value != null)? $value: null }}" placeholder="Enter {{$title}}" class="form-control" />

    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>