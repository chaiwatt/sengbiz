<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Amphur;
use App\Models\Province;
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
        'phone1', 
        'phone2', 
        'line_account', 
        'youtube', 
        'facebook', 
        'website', 
        'province_id',
        'amphur_id'
    ]; // ตัวอย่าง
    

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function amphur()
    {
        return $this->belongsTo(Amphur::class, 'amphur_id');
    }

 

}

