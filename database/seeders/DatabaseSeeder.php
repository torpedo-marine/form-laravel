<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(CategorySeeder::class);

        // ダミーデータ作成
        \App\Models\Contact::factory(35)->create();
    }
}
