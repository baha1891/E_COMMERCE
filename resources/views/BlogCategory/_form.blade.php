@csrf
    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="text" name="name_en" class="form-control"  value="{{ old('name_en', $blogCategory->name_en ?? '') }}" placeholder="name in english *">
        </div>
        @error('name_en')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="text" name="name_ar" class="form-control"  value="{{ old('name_ar', $blogCategory->name_ar ?? '') }}" placeholder="name in arabic *">
        </div>
        @error('name_ar')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

