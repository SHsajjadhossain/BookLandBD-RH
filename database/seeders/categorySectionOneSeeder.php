<?php

namespace Database\Seeders;

use App\Models\CategorySectionOne;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorySectionOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_section_one = new CategorySectionOne();
        $category_section_one->category_id = '1';
        $category_section_one->status = '1';
        $category_section_one->created_at = Carbon::now();
        $category_section_one->save();
    }
}
