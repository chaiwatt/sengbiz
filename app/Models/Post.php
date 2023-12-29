<?php

namespace App\Models;

use App\Models\PostInfo;
use App\Models\PostImage;
use App\Models\PostContactPhone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'main_category_id', 
        'sub_category_id',
        'sub_minor_category_id',
        'title',
        'price',
        'description',
        'body'
    ]; // ตัวอย่าง

    public function postInfo()
    {
        return $this->hasOne(PostInfo::class, 'post_id');
    }
    public function postImages()
    {
        return $this->hasMany(PostImage::class, 'post_id');
    }
    
    public function postContactPhones()
    {
        return $this->hasMany(PostContactPhone::class, 'post_id');
    }
    public function postNearPlaces()
    {
        return $this->hasMany(PostNearPlace::class, 'post_id');
    }
}
