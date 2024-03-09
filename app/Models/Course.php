<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'Cources';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'desc', 'image','url','level'];
}
