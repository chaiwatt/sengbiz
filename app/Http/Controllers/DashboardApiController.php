<?php

namespace App\Http\Controllers;

use App\Models\Amphur;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\SubMinorCategory;

class DashboardApiController extends Controller
{
    public function subCategory(Request $request)
    {
        $mainCategoryId = $request->data['mainCategoryId'];

        $subCategories = SubCategory::where('main_category_id',$mainCategoryId)->get();
        return view('dashboard.create-render.sub-category',[
            'subCategories' => $subCategories
            ])->render();
    }
    public function subMinorCategory(Request $request)
    {
        $subCategoryId = $request->data['subCategoryId'];

        $subMinorCategories = SubMinorCategory::where('sub_category_id',$subCategoryId)->get();
        return view('dashboard.create-render.sub-minor-category',[
            'subMinorCategories' => $subMinorCategories
            ])->render();
    }

    public function amphur(Request $request)
    {
        $provinceId = $request->data['provinceId'];

        $amphurs = Amphur::where('province_id',$provinceId)->get();
        return view('dashboard.create-render.amphur',[
            'amphurs' => $amphurs
            ])->render();
    }
}
