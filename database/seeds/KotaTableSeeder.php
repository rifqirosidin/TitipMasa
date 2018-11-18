<?php

use Illuminate\Database\Seeder;

class KotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents('kota.json');
        $array = json_decode($json, true);

        foreach ($array as $item) {
            App\Kota::create([
                'nama' => $item
            ]);
        }

    }
}
