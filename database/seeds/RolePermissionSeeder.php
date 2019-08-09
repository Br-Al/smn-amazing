<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
        // Reset cached roles and permissions
        app()['cache']->forget('spatie.permission.cache');


        \DB::table('roles')->delete();
        \DB::table('permissions')->delete();

        // create roles and assign created permissions
        $admin = Role::create(['id' => 1, 'name' => 'admin']);
        $teacher = Role::create(['id' => 2, 'name' => 'customer']);
        $mentor = Role::create(['id' => 3, 'name' => 'staff']);
        $student = Role::create(['id' => 4, 'name' => 'partner']);

        // create permissions
        Permission::create(['id' => 1, 'name' => 'product_access']);
        Permission::create(['id' => 2, 'name' => 'product_create']);
        Permission::create(['id' => 3, 'name' => 'product_edit']);
        Permission::create(['id' => 4, 'name' => 'product_view']);
        Permission::create(['id' => 5, 'name' => 'product_delete']);

        //users Permission
        Permission::create(['id' => 6, 'name' => 'user_access']);
        Permission::create(['id' => 7, 'name' => 'user_create']);
        Permission::create(['id' => 8, 'name' => 'user_view']);
        Permission::create(['id' => 9, 'name' => 'user_edit']);
        Permission::create(['id' => 10, 'name' => 'user_delete']);
        //users Permission

        Permission::create(['id' => 11, 'name' => 'role_access']);
        Permission::create(['id' => 12, 'name' => 'role_create']);
        Permission::create(['id' => 13, 'name' => 'role_edit']);
        Permission::create(['id' => 14, 'name' => 'role_view']);
        Permission::create(['id' => 15, 'name' => 'role_delete']);

        Permission::create(['id' => 16, 'name' => 'permission_access']);
        Permission::create(['id' => 17, 'name' => 'permission_create']);
        Permission::create(['id' => 18, 'name' => 'permission_edit']);
        Permission::create(['id' => 19, 'name' => 'permission_view']);
        Permission::create(['id' => 20, 'name' => 'permission_delete']);

        Permission::create(['id' => 21, 'name' => 'category_access']);
        Permission::create(['id' => 22, 'name' => 'category_create']);
        Permission::create(['id' => 23, 'name' => 'category_edit']);
        Permission::create(['id' => 24, 'name' => 'category_view']);
        Permission::create(['id' => 25, 'name' => 'category_delete']);

        Permission::create(['id' => 26, 'name' => 'order_access']);
        Permission::create(['id' => 27, 'name' => 'order_create']);
        Permission::create(['id' => 28, 'name' => 'order_edit']);
        Permission::create(['id' => 29, 'name' => 'order_view']);
        Permission::create(['id' => 30, 'name' => 'order_delete']);

        Permission::create(['id' => 31, 'name' => 'bill_access']);
        Permission::create(['id' => 32, 'name' => 'bill_create']);
        Permission::create(['id' => 33, 'name' => 'bill_edit']);
        Permission::create(['id' => 34, 'name' => 'bill_view']);
        Permission::create(['id' => 35, 'name' => 'bill_delete']);

        Permission::create(['id' => 36, 'name' => 'sub_category_access']);
        Permission::create(['id' => 37, 'name' => 'sub_category_create']);
        Permission::create(['id' => 38, 'name' => 'sub_category_edit']);
        Permission::create(['id' => 39, 'name' => 'sub_category_view']);
        Permission::create(['id' => 40, 'name' => 'sub_category_delete']);

        Permission::create(['id' => 41, 'name' => 'type_access']);
        Permission::create(['id' => 42, 'name' => 'type_create']);
        Permission::create(['id' => 43, 'name' => 'type_edit']);
        Permission::create(['id' => 44, 'name' => 'type_view']);
        Permission::create(['id' => 45, 'name' => 'type_delete']);

        Permission::create(['id' => 46, 'name' => 'auction_access']);
        Permission::create(['id' => 47, 'name' => 'auction_create']);
        Permission::create(['id' => 48, 'name' => 'auction_edit']);
        Permission::create(['id' => 49, 'name' => 'auction_view']);
        Permission::create(['id' => 50, 'name' => 'auction_delete']);

        Permission::create(['id' => 51, 'name' => 'advertising_access']);
        Permission::create(['id' => 52, 'name' => 'advertising_create']);
        Permission::create(['id' => 53, 'name' => 'advertising_edit']);
        Permission::create(['id' => 54, 'name' => 'advertising_view']);
        Permission::create(['id' => 55, 'name' => 'advertising_delete']);

        $admin->syncPermissions(Permission::all());
      
    }
}