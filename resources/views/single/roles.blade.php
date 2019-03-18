@foreach(\Spatie\Permission\Models\Role::latest()->get() as $role)
    <div class="checkbox  checkbox-primary">
        <input id="role_{{$role->id}}" type="checkbox" {{$user->hasRole($role)?'checked':''}}
        name="role[]" value="{{$role->id}}">
        <label for="role_{{$role->id}}">
            {{$role->description}}
        </label>
    </div>
    @if ($errors->has('role'))
        <span class="invalid-feedback" role="alert">
       <strong>{{ $errors->first('role') }}</strong>
        </span>
    @endif
@endforeach
