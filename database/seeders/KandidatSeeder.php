<?php

namespace Database\Seeders;

use App\Models\Kandidat;
use Illuminate\Database\Seeder;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kandidat::create([
            'nama' => 'Kandidat 1',
            'visi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora cum sapiente consectetur. Quis qui vel tempora ullam eum earum officiis?',
            'misi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, quae.',
            'periode' => '2021 - 2022',
            'foto' => 'yajadi.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            'jumlahsuara' => 0
        ],
        [
            'nama' => 'Kandidat 2',
            'visi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora cum sapiente consectetur. Quis qui vel tempora ullam eum earum officiis?',
            'misi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, quae.',
            'periode' => 2021,
            'foto' => 'yajadi.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            'jumlahsuara' => 0
        ],
        [
            'nama' => 'Kandidat 3',
            'visi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora cum sapiente consectetur. Quis qui vel tempora ullam eum earum officiis?',
            'misi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, quae.',
            'periode' => 2021,
            'foto' => 'yajadi.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            'jumlahsuara' => 0
        ],
        [
            'nama' => 'Kandidat 4',
            'visi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora cum sapiente consectetur. Quis qui vel tempora ullam eum earum officiis?',
            'misi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse, quae.',
            'periode' => 2021,
            'foto' => 'yajadi.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            'jumlahsuara' => 0
        ]);
    }
}
