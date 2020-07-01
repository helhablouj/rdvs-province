<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('entites')->insert([
            [
                'nom' => 'الكتابة العامة',
                'capacite' => 1,
                'duree_rdvs' => 20,
            ], 
            [
                'nom' => 'قسم الشؤون الداخلية',
                'capacite' => 5,
                'duree_rdvs' => 15,
            ], 
            [
                'nom' => 'قسم الجماعات المحلية',
                'capacite' => 5,
                'duree_rdvs' => 15,
            ],
            [
                'nom' => 'ديوان السيد العامل',
                'capacite' => 2,
                'duree_rdvs' => 30,
            ], 
        ]);
    }
}
