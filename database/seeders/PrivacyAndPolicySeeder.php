<?php

namespace Database\Seeders;

use App\Models\Backend\PrivacyAndPolicy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrivacyAndPolicySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PrivacyAndPolicy::create([

            'privacy_policy' => ['ar' => 'أدخل سياسة الخصوصية وشروط الإستخدام بالعربية هنا', 'en' => 'Enter Privacy and Usage Policy
 in English here'],
        ]);


    }
}
