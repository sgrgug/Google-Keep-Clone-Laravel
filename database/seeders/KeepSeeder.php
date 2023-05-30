<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Keep;
use Carbon\Carbon;

class KeepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $now = Carbon::now();
        foreach (range(1, 10) as $key => $value) {
            Keep::create([
                'title' => implode(' ', $faker->words(3)),
                'content' => implode(' ', $faker->sentences()),
                'pin' => '0',
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
