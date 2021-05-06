<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Xiaofengit\IndustryOfChinaForLaravel\Industry;

class IndustrySeeder extends Seeder
{
    public function run()
    {
        $data = Industry::getRawInsert();
        DB::statement($data);
    }
}