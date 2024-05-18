<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->insert([
            'website_name' => 'HEATS',
            'website_logo' => 'heats_logo.png', // Updated logo file name
            'website_favicon' => 'heats_favicon.png', // Updated favicon file name
            'website_email' => 'info@heats.com', // Updated email
            'website_phone' => '+88 01792 11 82 46',
            'website_address' => 'House: 66, Road: Gausul Azam Avenue, Sector: 13, Uttara- 1230, Dhaka, Bangladesh',
            'website_description' => 'Welcome to HEATS, your ultimate source for premium e-cigarettes and vaping products. We are committed to providing you with the best quality devices and accessories to enhance your vaping experience. Discover a wide range of products designed to meet your needs and preferences, ensuring a satisfying and enjoyable experience every time.',
            'about_content' => 'At HEATS, we are passionate about offering top-notch e-cigarette products that cater to both beginners and experienced vapers. Our mission is to promote a healthier alternative to traditional smoking by providing reliable and innovative vaping solutions. Explore our collection and join the HEATS community for an unparalleled vaping journey.',
            'about_image' => 'heats_about.png', // Updated about image file name
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
