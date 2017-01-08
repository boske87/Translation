<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::collection('translations')->delete();
        DB::collection('translations')->insert(
            [
                'appId' => 2,
                'moduleId' => 1,
                'languageId' => 3,
                'title' => 'Ovo je prevod'
            ]);
    }
}
