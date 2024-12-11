<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArchivedStudent extends Model
{
    protected $fillable = ['nis', 'name', 'email', 'status'];
}
