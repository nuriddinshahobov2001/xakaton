<?php

namespace Database\Seeders;

use App\Models\ApplicationModel;
use App\Models\ApplicationOptionModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $app  = ApplicationModel::create([
            'name' => 'Test 1'
        ]);
        for ($i = 1; $i < 5; $i++) {
            ApplicationOptionModel::create([
                'application_id' => $app->id,
                'name' => 'option 1'
            ]);
        }
        $app  = ApplicationModel::create([
            'name' => 'Test 2'
        ]);
        for ($i = 1; $i < 5; $i++) {
            ApplicationOptionModel::create([
                'application_id' => $app->id,
                'name' => 'option 1'
            ]);
        }
        $app  = ApplicationModel::create([
            'name' => 'Test 3'
        ]);
        for ($i = 1; $i < 5; $i++) {
            ApplicationOptionModel::create([
                'application_id' => $app->id,
                'name' => 'option 3'
            ]);
        }
    }
}
