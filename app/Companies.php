<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = "companies";
    protected $fillable = [
        'name',
        'membership_type',
        'status',
        'update_at'
    ];
}
