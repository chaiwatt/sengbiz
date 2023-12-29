<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sub_categories')->insert([
             [
                'main_category_id' => 1,
                'name' => 'ธุรกิจก่อสร้าง/วิศวกรรม'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจการเกษตร'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจการศึกษา'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจความงาม/สุขภาพ'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจค้าปลีก'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจค้าส่ง'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจเทคโนโลยี/สื่อ'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจบริการ'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจบ้านและสวน'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจแฟชั่น'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจยานยนต์'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจสัตว์เลี้ยง'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจสันทนาการ/ท่องเที่ยว'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจอาหารเครื่องดื่ม'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจอสังหาริมทรัพย์'
            ],
            [
                'main_category_id' => 1,
                'name' => 'ธุรกิจอุตสาหกรรม'
            ],
        [
                'main_category_id' => 2,
                'name' => 'พื้นที่ขายอาหารเครื่องดื่ม'
            ],
            [
                'main_category_id' => 2,
                'name' => 'พื้นที่ตลาดนัด'
            ],
            [
                'main_category_id' => 2,
                'name' => 'พื้นที่ร้านกาแฟ'
            ],
            [
                'main_category_id' => 2,
                'name' => 'พื้นที่ร้านขายเสื้อผ้า'
            ],
            [
                'main_category_id' => 2,
                'name' => 'พื้นที่ร้านค้าทั่วไป'
            ],
            [
                'main_category_id' => 2,
                'name' => 'พื้นที่ร้านเสริมสวย'
            ],
            [
                'main_category_id' => 2,
                'name' => 'พื้นที่ร้านอาหาร'
            ],
            [
                'main_category_id' => 2,
                'name' => 'พื้นที่สอนพิเศษ'
            ],
        [
                'main_category_id' => 3,
                'name' => 'รับฝากขายขนม'
            ],
            [
                'main_category_id' => 3,
                'name' => 'รับฝากขายเครื่องดื่ม'
            ],
            [
                'main_category_id' => 3,
                'name' => 'รับฝากขายอาหาร'
            ],
            [
                'main_category_id' => 3,
                'name' => 'รับฝากขายสินค้าอื่นๆ'
            ],
        [
                'main_category_id' => 4,
                'name' => 'แฟรนไชส์ก๋วยเตี๋ยว'
            ],
            [
                'main_category_id' => 4,
                'name' => 'แฟรนไชส์กาแฟ'
            ],
            [
                'main_category_id' => 4,
                'name' => 'แฟรนไชส์เครื่องดื่ม'
            ],
            [
                'main_category_id' => 4,
                'name' => 'แฟรนไชส์อาหาร'
            ],
            [
                'main_category_id' => 4,
                'name' => 'แฟรนไชส์ไอศครีม'
            ],
            [
                'main_category_id' => 4,
                'name' => 'แฟรนไชส์อื่นๆ'
            ],
        [
                'main_category_id' => 5,
                'name' => 'บ้านเดี่ยว'
            ],
            [
                'main_category_id' => 5,
                'name' => 'คอนโด'
            ],
            [
                'main_category_id' => 5,
                'name' => 'ทาว์นโฮม'
            ],
            [
                'main_category_id' => 5,
                'name' => 'ตึกแถว/อาคารพาณิชย์'
            ],
            [
                'main_category_id' => 5,
                'name' => 'ที่ดิน'
            ],
            [
                'main_category_id' => 5,
                'name' => 'อสังหาฯอื่นๆ'
            ],
            [
                'main_category_id' => 6,
                'name' => 'เรียนทำขนม'
            ],
            [
                'main_category_id' => 6,
                'name' => 'เรียนทำอาหาร'
            ],
            [
                'main_category_id' => 6,
                'name' => 'คอร์สฝึกอาชีพอื่นๆ'
            ],
        [
                'main_category_id' => 7,
                'name' => 'งานประจำ'
            ],
            [
                'main_category_id' => 7,
                'name' => 'งานพาร์ทไทม์'
            ],
        ]);
    }
}
