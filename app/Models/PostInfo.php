<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id', 
        'org_id', 
        'org_user', 
        'lat', 
        'lng', 
        'province_id',
        'amphur_id'
    ]; // ตัวอย่าง
    
    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}

