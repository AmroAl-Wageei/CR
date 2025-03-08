<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class student extends Model
{
    protected $fillable = ['name',  'number' ,'email'];
    use HasFactory;

    use SoftDeletes;
}