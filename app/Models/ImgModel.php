<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImgModel extends Model
{
    protected $table = 'img';
    protected $fillable = ['filename', 'name'];
}
