<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $fillable = ['id', 'title', 'content'];
    protected $table = 'abouts';
}
