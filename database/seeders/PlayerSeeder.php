<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Player::create([
            'photoPlayer' =>'',
            'namePlayer'=>'Amira Eltaher',
            'agePlayer'=>'19',
            'addresPlayer'=>'Ismailia, Ismailia',
            'phonePlayer'=>'01000123456',
        ]);

        Player::create([
            'photoPlayer' =>'',
            'namePlayer'=>'Amira Eltaher2',
            'agePlayer'=>'12',
            'addresPlayer'=>'Ismailia, Ismailia2',
            'phonePlayer'=>'01000123311',
        ]);
    }
}
