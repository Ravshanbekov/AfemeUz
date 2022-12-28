<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // 'user-list',
            // 'user-create',
            // 'user-edit',
            // 'user-delete',

            // 'role-list',
            // 'role-create',
            // 'role-edit',
            // 'role-delete',

            // 'region-list',
            // 'region-create',
            // 'region-edit',
            // 'region-delete',

            // 'citie-list',
            // 'citie-create',
            // 'citie-edit',
            // 'citie-delete',

            // 'sale-list',
            // 'sale-create',
            // 'sale-edit',
            // 'sale-delete',

            // 'repair-list',
            // 'repair-create',
            // 'repair-edit',
            // 'repair-delete',

            // 'material-list',
            // 'material-create',
            // 'material-edit',
            // 'material-delete',

            // 'category-list',
            // 'category-create',
            // 'category-edit',
            // 'category-delete',
            
            // 'client-list',
            // 'client-delete',
            
            
            // 'slider-list',
            // 'slider-create',
            // 'slider-edit',
            // 'slider-delete',
            
            // 'address-list',
            // 'address-create',
            // 'address-edit',
            // 'address-delete',
            
            // 'network-list',
            // 'network-create',
            // 'network-edit',
            // 'network-delete',
            
            // 'partner-list',
            // 'partner-create',
            // 'partner-edit',
            // 'partner-delete',
            
            // 'partnericon-list',
            // 'partnericon-create',
            // 'partnericon-edit',
            // 'partnericon-delete',
            
            // 'logo-list',
            // 'logo-create',
            // 'logo-edit',
            // 'logo-delete',
            
            // 'advertisement-list',
            // 'advertisement-create',
            // 'advertisement-edit',
            // 'advertisement-delete',
            
            // 'product-list',
            // 'product-create',
            // 'product-edit',
            // 'product-delete',
         ];

         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
