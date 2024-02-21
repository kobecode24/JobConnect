<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'job_offer_access',
            'job_offer_edit',
            'job_offer_delete',
            'job_offer_create',
            'job_offer_apply',

            'company_access',
            'company_edit',
            'company_delete',
            'company_create',

            'skill_access',
            'skill_edit',
            'skill_delete',
            'skill_create',

            'category_access',
            'category_edit',
            'category_delete',
            'category_create',

            'city_access',
            'city_edit',
            'city_delete',
            'city_create',

            'user_access',
            'user_edit',
            'user_delete',
            'user_create',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
