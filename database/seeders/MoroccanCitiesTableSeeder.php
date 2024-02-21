<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoroccanCitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            'Casablanca',
            'Rabat',
            'Fes',
            'Marrakech',
            'Agadir',
            'Tanger',
            'Oujda',
            'El Jadida',
            'Meknes',
            'Kenitra',
            'Tetouan',
            'Safi',
            'Laayoune',
            'Nador',
            'Khouribga',
            'Taza',
            'Settat',
            'Berrechid',
            'Beni Mellal',
            'Ouarzazate',
            'Dakhla',
            'Tiznit',
            'Larache',
            'Khemisset',
            'Taroudant',
            'Sidi Kacem',
            'Guelmim',
            'Ksar El Kebir',
            'Tiflet',
            'Azrou',
            'Midelt',
            'Skhirat',
            'Khenifra',
            'Sidi Slimane',
            'Errachidia',
            'Oulad Teima',
            'Berrechid',
            'Taourirt',
            'Sefrou',
            'Youssoufia',
            'Tan-Tan',
            'Sidi Bennour',
            'Ouarzazate',
            'Berkane',
            'Sidi Bennour',
            'Tinghir',
            'Chefchaouen',
            'Figuig',
        ];

        foreach ($cities as $city) {
            City::create([
                'name' => $city,
            ]);
        }
    }
}
