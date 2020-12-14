<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $table = 'students';

    protected $fillable = [
        'name','village','po','dist','mobile','password','otp','wsap_no','email','current_school','medium','status','fee_status','is_register'
    ];
}
