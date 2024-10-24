<?php

namespace Database\Seeders;

use App\Models\Banner;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $banner = new Banner();
        $banner->banner_title_small = 'Magazine Cover';
        $banner->banner_title_big = 'Mockup.';
        $banner->banner_text = 'Cover up front of book and leave summary';
        $banner->banner_photo = 'banner-1.jpg';
        $banner->created_at = Carbon::now();
        $banner->save();

        $banner_two = new Banner();
        $banner_two->banner_title_small = 'Book Mockup';
        $banner_two->banner_title_big = 'Hardcover.';
        $banner_two->banner_text = 'Cover up front of book and leave summary';
        $banner_two->banner_photo = 'banner-2.jpg';
        $banner_two->created_at = Carbon::now();
        $banner_two->save();
    }
}
