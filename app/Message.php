<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Support\Traits\FilterHandle;

class Message extends Model
{
    use FilterHandle;

    protected $fillable = [
        'name', 'email', 'phone', 'message'
    ];
}
