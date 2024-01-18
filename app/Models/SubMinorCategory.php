<?php

namespace App\Models;

use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubMinorCategory extends Model
{
    use HasFactory;
    protected $fillable = ['sub_category_id', 'name'];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }
    public function posts()
    {
        return $this->hasMany(Post::class, 'sub_minor_category_id');
    }
}
