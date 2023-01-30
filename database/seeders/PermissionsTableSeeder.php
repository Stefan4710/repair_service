<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 18,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 19,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 20,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 21,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 22,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 23,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 24,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 25,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 26,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 27,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 28,
                'title' => 'brand_create',
            ],
            [
                'id'    => 29,
                'title' => 'brand_edit',
            ],
            [
                'id'    => 30,
                'title' => 'brand_show',
            ],
            [
                'id'    => 31,
                'title' => 'brand_delete',
            ],
            [
                'id'    => 32,
                'title' => 'brand_access',
            ],
            [
                'id'    => 33,
                'title' => 'device_create',
            ],
            [
                'id'    => 34,
                'title' => 'device_edit',
            ],
            [
                'id'    => 35,
                'title' => 'device_show',
            ],
            [
                'id'    => 36,
                'title' => 'device_delete',
            ],
            [
                'id'    => 37,
                'title' => 'device_access',
            ],
            [
                'id'    => 38,
                'title' => 'device_component_create',
            ],
            [
                'id'    => 39,
                'title' => 'device_component_edit',
            ],
            [
                'id'    => 40,
                'title' => 'device_component_show',
            ],
            [
                'id'    => 41,
                'title' => 'device_component_delete',
            ],
            [
                'id'    => 42,
                'title' => 'device_component_access',
            ],
            [
                'id'    => 43,
                'title' => 'device_management_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
