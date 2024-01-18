<?php

namespace App\Models;

use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Post;

class MainCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'main_category_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'main_category_id');
    }
}
