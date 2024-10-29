<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            [
                'id' => 1,
                'name' => 'новое',
            ],
            [
                'id' => 2,
                'name' => 'подтверждено',
            ],
            [
                'id' => 3,
                'name' => 'отклонено',
            ],
        ]);
    }
}
