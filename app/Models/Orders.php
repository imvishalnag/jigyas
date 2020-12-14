<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use SoftDeletes;
    protected $table = 'orders';
    protected $fillable = [
        'user_id','total_subject','amount','payment_request_id','payment_id','status'
    ];
}
