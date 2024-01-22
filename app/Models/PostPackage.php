<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostPackage extends Model
{
    use HasFactory;
    protected $fillable = ['name']; // ตัวอย่าง
     
    public function posts()
    {
        return $this->hasMany(Post::class, 'post_package_id');
    }
}
