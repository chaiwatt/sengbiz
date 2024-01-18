<?php

namespace App\Models;

use App\Models\Post;
use App\Models\MainCategory;
use App\Models\SubMinorCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable = ['main_category_id', 'name'];

    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class, 'main_category_id');
    }
    public function subMinorCategories()
    {
        return $this->hasMany(SubMinorCategory::class, 'sub_category_id');
    }
    public function posts()
    {
        return $this->hasMany(Post::class, 'sub_category_id');
    }
}
