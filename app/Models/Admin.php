<?php

namespace App\Models;


use Spatie\Permission\Traits\HasRoles;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Admin extends Authenticatable
{

    use HasFactory;
    use HasTranslations;
    use HasRoles;

    protected $fillable=['first_name','last_name','email','password','phone'];
    public $translatable = ['first_name','last_name'];
}
