<?php

namespace App\Models;

use Carbon\Carbon;
use App\Models\User;
use App\Models\PostInfo;
use App\Models\PostView;
use App\Models\PostImage;
use App\Models\MainCategory;
use App\Models\PostNearPlace;
use App\Models\PostContactPhone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'main_category_id', 
        'sub_category_id',
        'sub_minor_category_id',
        'title',
        'org_title',
        'slug',
        'org_slug',
        'price',
        'description',
        'body',
        'need_broker',
        'is_ads',
        'indexing_code'
    ]; // ตัวอย่าง

    public function postView()
    {
        return $this->hasOne(PostView::class, 'post_id');
    }
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
    public function postNearPlace()
    {
        return $this->hasOne(PostNearPlace::class, 'post_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function mainCategory()
    {
        return $this->belongsTo(MainCategory::class, 'main_category_id');
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    
    public function getPostNearPlaceAttribute()
    {
        return PostNearPlace::where('post_id', $this->id)->first();
    }

    public function getPostDateAttribute()
    {
        $createdAtDate = Carbon::parse($this->created_at)->format('Y-m-d');
        $todayDate = now()->format('Y-m-d');

        if ($createdAtDate == $todayDate) {
            return 'วันนี้';
        } else {
            return $this->formatThaiDate(Carbon::parse($this->created_at));
        }
    }

    protected function formatThaiDate(Carbon $date)
    {
        $thaiMonths = [
            1 => 'ม.ค.',
            2 => 'ก.พ.',
            3 => 'มี.ค.',
            4 => 'เม.ย.',
            5 => 'พ.ค.',
            6 => 'มิ.ย.',
            7 => 'ก.ค.',
            8 => 'ส.ค.',
            9 => 'ก.ย.',
            10 => 'ต.ค.',
            11 => 'พ.ย.',
            12 => 'ธ.ค.',
        ];

        $day = $date->format('d');
        $month = $thaiMonths[$date->format('n')];
        $year = $date->format('Y') + 543;

        return "$day $month $year";
    }
}
