@csrf
    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="text" name="name" class="form-control"  value="{{old('name',$role->name??'')}}" placeholder="role name" *">
        </div>
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>



    @foreach ($permissions as $permission)


    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="checkbox" id="{{$permission->name}}" name="permission_ids[]" value="{{$permission->id}}">
            <label for="{{$permission->name}}"> {{$permission->name}}</label><br>
        </div>
        @error('permission')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    @endforeach


