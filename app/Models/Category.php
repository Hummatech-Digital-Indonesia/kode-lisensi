<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $incrementing = false;
    public $fillable = ['id', 'name', 'icon'];
    public $keyType = 'char';
    protected $table = 'categories';
    protected $primaryKey = 'id';
}
