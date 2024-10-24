<?php

namespace Database\Seeders;

use App\Models\CategorySectionTwo;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class categorySectionTwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_section_two = new CategorySectionTwo();
        $category_section_two->category_id = '2';
        $category_section_two->status = '1';
        $category_section_two->created_at = Carbon::now();
        $category_section_two->save();
    }
}
