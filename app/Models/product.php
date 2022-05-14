<?php

namespace App\Models;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class product extends Model
{
    use HasFactory;
    protected $fillabel = [
        'id',
        'name',
        'unit',
        'price',
        'quntity'
    ];
}
