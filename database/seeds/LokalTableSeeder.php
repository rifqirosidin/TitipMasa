<?php

use Illuminate\Database\Seeder;

class LokalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kota = file_get_contents('database/seeds/kota.json');
        $kotas = json_decode($kota);

        foreach ($kotas as $kota){

            App\Kota::create([
                'code' => $kota->code,
                'name' => $kota->name,
                'slug' => str_slug($kota->name, '-')
            ]);
        }
    }
}
