<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    public $timestamps = false;
    protected $fillable = ['name', 'description', 'price', 'status', 'services'];


}
