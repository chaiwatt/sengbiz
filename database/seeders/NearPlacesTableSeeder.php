<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NearPlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('near_places')->insert([
            ['name'=>'AirportLink','code'=>'other'],
            ['name'=>'BTSMRT','code'=>'other'],
            ['name'=>'ตลาด','code'=>'other'],
            ['name'=>'มหาวิทยาลัย','code'=>'other'],
            ['name'=>'โรงพยาบาล','code'=>'other'],
            ['name'=>'โรงเรียน','code'=>'other'],
            ['name'=>'ห้างสรรพสินค้า','code'=>'other'],
            ['name'=>'BTSกรมทหารราบที่11','code'=>'bts'],
            ['name'=>'BTSกรุงธนบุรี','code'=>'bts'],
            ['name'=>'BTSคูคต','code'=>'bts'],
            ['name'=>'BTSช่องนนทรี','code'=>'bts'],
            ['name'=>'BTSชิดลม','code'=>'bts'],
            ['name'=>'BTSตลาดพลู','code'=>'bts'],
            ['name'=>'BTSทองหล่อ','code'=>'bts'],
            ['name'=>'BTSนานา','code'=>'bts'],
            ['name'=>'BTSบางจาก','code'=>'bts'],
            ['name'=>'BTSบางนา','code'=>'bts'],
            ['name'=>'BTSบางหว้า','code'=>'bts'],
            ['name'=>'BTSแบริ่ง','code'=>'bts'],
            ['name'=>'BTSปากน้ำ','code'=>'bts'],
            ['name'=>'BTSปุณณวิถี','code'=>'bts'],
            ['name'=>'BTSปู่เจ้า','code'=>'bts'],
            ['name'=>'BTSพญาไท','code'=>'bts'],
            ['name'=>'BTSพร้อมพงษ์','code'=>'bts'],
            ['name'=>'BTSพระโขนง','code'=>'bts'],
            ['name'=>'BTSเพลินจิต','code'=>'bts'],
            ['name'=>'BTSแพรกษา','code'=>'bts'],
            ['name'=>'BTSมหาวิทยาลัยเกษตรศาสตร์','code'=>'bts'],
            ['name'=>'BTSแยกคปอ.','code'=>'bts'],
            ['name'=>'BTSราชเทวี','code'=>'bts'],
            ['name'=>'BTSวงเวียนใหญ่','code'=>'bts'],
            ['name'=>'BTSวุฒากาศ','code'=>'bts'],
            ['name'=>'BTSศรีนครินทร์','code'=>'bts'],
            ['name'=>'BTSศาลาแดง','code'=>'bts'],
            ['name'=>'BTSสนามกีฬาแห่งชาติ','code'=>'bts'],
            ['name'=>'BTSสนามเป้า','code'=>'bts'],
            ['name'=>'BTSสยาม','code'=>'bts'],
            ['name'=>'BTSสะพานควาย','code'=>'bts'],
            ['name'=>'BTSสะพานตากสิน','code'=>'bts'],
            ['name'=>'BTSสะพานใหม่','code'=>'bts'],
            ['name'=>'BTSสำโรง','code'=>'bts'],
            ['name'=>'BTSสุรศักดิ์','code'=>'bts'],
            ['name'=>'BTSหมอชิต','code'=>'bts'],
            ['name'=>'BTSอนุสาวรีย์ชัยสมรภูมิ','code'=>'bts'],
            ['name'=>'BTSอโศก','code'=>'bts'],
            ['name'=>'BTSอ่อนนุช','code'=>'bts'],
            ['name'=>'BTSอารีย์','code'=>'bts'],
            ['name'=>'BTSอุดมสุข','code'=>'bts'],
            ['name'=>'BTSเอกมัย','code'=>'bts'],
            ['name'=>'MRTกำแพงเพชร','code'=>'mrt'],
            ['name'=>'MRTคลองเตย','code'=>'mrt'],
            ['name'=>'MRTคลองบางไผ่','code'=>'mrt'],
            ['name'=>'MRTตลาดบางใหญ่','code'=>'mrt'],
            ['name'=>'MRTท่าพระ','code'=>'mrt'],
            ['name'=>'MRTไทรม้า','code'=>'mrt'],
            ['name'=>'MRTบางขุนนนท์','code'=>'mrt'],
            ['name'=>'MRTบางแค','code'=>'mrt'],
            ['name'=>'MRTบางซ่อน','code'=>'mrt'],
            ['name'=>'MRTบางพลัด','code'=>'mrt'],
            ['name'=>'MRTบางพลู','code'=>'mrt'],
            ['name'=>'MRTบางยี่ขัน','code'=>'mrt'],
            ['name'=>'MRTบางรักน้อยท่าอิฐ','code'=>'mrt'],
            ['name'=>'MRTบางรักใหญ่','code'=>'mrt'],
            ['name'=>'MRTบางหว้า','code'=>'mrt'],
            ['name'=>'MRTพระราม9','code'=>'mrt'],
            ['name'=>'MRTพหลโยธิน','code'=>'mrt'],
            ['name'=>'MRTเพชรเกษม48','code'=>'mrt'],
            ['name'=>'MRTเพชรบุรี','code'=>'mrt'],
            ['name'=>'MRTแยกติวานนท์','code'=>'mrt'],
            ['name'=>'MRTรัชดาภิเษก','code'=>'mrt'],
            ['name'=>'MRTลาดพร้าว','code'=>'mrt'],
            ['name'=>'MRTลุมพินี','code'=>'mrt'],
            ['name'=>'MRTวัดมังกร','code'=>'mrt'],
            ['name'=>'MRTศูนย์ราชการนนทบุรี','code'=>'mrt'],
            ['name'=>'MRTศูนย์วัฒนธรรมแห่งประเทศไทย','code'=>'mrt'],
            ['name'=>'MRTสวนจตุจักร','code'=>'mrt'],
            ['name'=>'MRTสะพานพระนั่งเกล้า','code'=>'mrt'],
            ['name'=>'MRTสามยอด','code'=>'mrt'],
            ['name'=>'MRTสามย่าน','code'=>'mrt'],
            ['name'=>'MRTสิรินธร','code'=>'mrt'],
            ['name'=>'MRTสีลม','code'=>'mrt'],
            ['name'=>'MRTสุขุมวิท','code'=>'mrt'],
            ['name'=>'MRTสุทธิสาร','code'=>'mrt'],
            ['name'=>'MRTหลักสอง','code'=>'mrt'],
            ['name'=>'MRTห้วยขวาง','code'=>'mrt'],
            ['name'=>'MRTหัวลำโพง','code'=>'mrt'],
            ['name'=>'MRTอิสรภาพ','code'=>'mrt']

        ]);
    }
}
