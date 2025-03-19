<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class QuoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $path = database_path('seeders/quotes.sql');

        if (File::exists($path)) {
            $sql = File::get($path);
            DB::unprepared($sql);
            $this->command->info('SQL file seeded successfully.');
        } else {
            $this->command->error('SQL file not found.');
        }
    }
}
