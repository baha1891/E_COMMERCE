

 @csrf
    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="text" class="form-control" name="first_name_en" value="{{ old('first_name_en', $admin->getTranslation('first_name', 'en') ?? '' )}}" placeholder="{{ trans('Admin_tr\_form_tr.Admin_First_Name_ar')}} *" />


        </div>
        @error('first_name_en')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="text" class="form-control" name="first_name_en" value="{{ old('first_name_en', $admin->getTranslation('first_name', 'en') ?? '' )}}" placeholder="{{ trans('Admin_tr\_form_tr.Admin_First_Name_ar')}} *" />


        </div>
        @error('first_name_en')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

    
    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="text"  class="form-control" id="inputFirstName" name="first_name_ar" value="{{ old('first_name_ar', $admin->getTranslation('first_name', 'ar') ?? '') }}" placeholder="{{ trans('Admin_tr\_form_tr.Admin_First_Name_ar')}} *">
        </div>
        @error('first_name_ar')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="text"  class="form-control" name="last_name_en" value="{{ old('last_name_en', $admin->getTranslation('last_name', 'en') ?? '') }}" placeholder="{{ trans('Admin_tr\_form_tr.Admin_Last_Name_en')}} *">
        </div>
        @error('last_name_en')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="text" name="last_name_ar" class="form-control" value="{{ old('last_name_ar', $admin->getTranslation('last_name', 'ar') ?? '') }}" placeholder="{{ trans('Admin_tr\_form_tr.Admin_Last_Name_ar')}} *">
        </div>
        @error('last_name_ar')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="email" name="email" class="form-control" style="direction: inherit;" value="{{old('email',$admin->email??'')}}" id="inputEmail3" placeholder="{{ trans('Admin_tr\_form_tr.Email_address')}} *">
        </div>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="password" name="password" value="{{old('password',$admin->password??'')}}" class="form-control" id="inputPassword3" placeholder="{{ trans('Admin_tr\_form_tr.Password')}} *">
        </div>
        @error('password')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="row mb-4">
        <div class="col-sm-12">
            <input type="number" style="direction: inherit;" name="phone" class="form-control" value="{{old('phone',$admin->phone??'')}}" id="inputphone" placeholder="{{ trans('Admin_tr\_form_tr.Phone_Number')}} *">
        </div>
        @error('phone')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>

