<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $primaryKey='fid';
    protected $fillable = ['rid','file', 'address'];

}
