<?php

namespace App\Models;

use App\Models\Amphur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Province extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function amphurs()
    {
        return $this->hasMany(Amphur::class, 'province_id');
    }
}
