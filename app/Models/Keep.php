<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keep extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'title', 'content', 'bgcolor'];
}