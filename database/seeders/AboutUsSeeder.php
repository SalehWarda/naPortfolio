<?php

namespace Database\Seeders;

use App\Models\Backend\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        AboutUs::create([
            'name' => ['ar' => 'أدمن', 'en' => 'Admin'],
            'degree' => ['ar' => 'طالب', 'en' => 'Student'],
            'bio' => ['ar' => 'إنني طالب', 'en' => 'Im Student'],
            'education' => ['ar' => 'مهندس برمجيات', 'en' => 'Web Programming'],
            'experiences' => ['ar' => 'خبرة أكثر من 3 سنوات', 'en' => 'More than 3 Years'],
            'goals' => ['ar' => 'إمتلاك شركة', 'en' => 'Have Company']
        ]);
    }
}
