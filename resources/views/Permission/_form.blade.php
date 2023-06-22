@csrf
    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="text" name="name" class="form-control"  value="{{old('name',$permission->name??'')}}" placeholder="permission name" *">
        </div>
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

