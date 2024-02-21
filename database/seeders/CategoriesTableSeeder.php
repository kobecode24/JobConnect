<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Informatique',
            'Marketing',
            'Finance',
            'Ressources Humaines',
            'Communication',
            'Vente',
            'Gestion',
            'Comptabilité',
            'Juridique',
            'Logistique',
            'Achat',
            'Production',
            'Maintenance',
            'Qualité',
            'Recherche et Développement',
            'Santé',
            'Enseignement',
            'Art',
            'Sport',
            'Agriculture',
            'Pêche',
            'Élevage',
            'Forêt',
            'Tourisme',
            'Hôtellerie',
            'Restauration',
            'Transport',
            'Énergie',
            'Environnement',
            'BTP',
            'Immobilier',
            'Assurance',
            'Banque',
            'Commerce',
            'Industrie',
            'Télécommunication',
            'Média',
            'Édition',
            'Audiovisuel',
            'Cinéma',
            'Musique',
            'Théâtre',
            'Danse',
            'Mode',
            'Design',
            'Architecture',
            'Urbanisme',
            'Décoration',
            'Beauté',
            'Cosmétique',
            'Parfumerie',
            'Coiffure',
            'Esthétique',
            'Spa',
            'Bien-être',
            'Santé',
            'Pharmacie',
            'Médecine',
            'Chirurgie',
            'Dentaire',
            'Optique',
            'Paramédical',
            'Social',
            'Solidarité',
            'Humanitaire',
            'Développement',
            'International',
            'Droit',
            'Justice',
            'Sécurité',
            'Défense',
            'Police',
            'Gendarmerie',
            'Pompiers',
            'Sécurité privée',
            'Sûreté',
            'Surveillance',
            'Protection',
            'Sécurité civile',
            'Sécurité routière',
            'Sécurité incendie',
            'Sécurité industrielle',
            'Sécurité informatique',
            'Sécurité alimentaire',
            'Sécurité environ',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
