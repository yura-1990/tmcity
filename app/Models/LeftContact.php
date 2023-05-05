<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class LeftContact extends Model
{
    protected $table = "left_contacts";
    protected $fillable = ['name','email','message'];

}
