<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'phone', 'email', 'address'
    ];
   protected $table = 'company_info';
}
