<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scraped extends Model
{
    use HasFactory;
    protected $fillable = ['pid'];
}
