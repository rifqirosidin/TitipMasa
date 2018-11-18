<?php

use Illuminate\Database\Seeder;
use App\User;
class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_country = file_get_contents('database/seeds/country.json');
        $countries = json_decode($data_country);

        foreach ($countries as $country){

            App\Country::create([
                'code' => $country->code,
                'name' => $country->name,
                'slug' => str_slug($country->name, '-')
            ]);
        }

    //     $user = new User;
    // $user1 = 
    // [
    //     'name' =>'Rifqi Rosidin',
    //     'username' => 'rifqirosidin',
    //     'email' => 'rifqi.godog@gmail.com',
    //     'password' => bcrypt('123456') 

    // ];

    // $user->save($user1);

    // $user2 = [
    //     'name' => 'Fikri Makmur',
    //     'username' => 'fikri',
    //     'email' => 'fikri@gmail.com',
    //     'password' => bcrypt('123456') 

    // ];

    // $user->save($user2);

    // $user3 = [
    //     'name' =>'Latifah',
    //     'username' => 'latifah',
    //     'email' => 'latifah@gmail.com',
    //     'password' => bcrypt('123456') 

    // ];

    // $user->save($user3);
    }

    


}
