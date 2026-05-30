<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('admin')->updateOrInsert(
            ['username' => 'president_apeh'],
            ['password_hash' => password_hash('APEH@2026!Secure', PASSWORD_BCRYPT)]
        );
    }
}
