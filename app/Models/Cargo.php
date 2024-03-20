<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

    protected $fillable = ['user_name', 'user_surname', 'product_name', 'product_content', 'product_kilogram',  'product_description'];
}
