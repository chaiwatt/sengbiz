<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostContactPhone extends Model
{
    use HasFactory;

    protected $fillable = ['post_id','phone']; // ตัวอย่าง

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
