<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $table = 'students';

    protected $fillable = [
        'name','village','po','dist','mobile','password','otp','wsap_no','email','current_school','medium','status','fee_status','is_register'
    ];
}
