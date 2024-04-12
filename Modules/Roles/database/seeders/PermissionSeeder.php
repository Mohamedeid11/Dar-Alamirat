<?php

namespace Modules\Roles\database\seeders;

use Modules\Admin\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->delete();
        DB::table('model_has_roles')->delete();
        DB::table('model_has_permissions')->delete();

        app()['cache']->forget('spatie.permission.cache');

        $adminRole  =  Role::firstOrCreate(['guard_name' => 'admin','name' => 'admin']);

        $adminPermissions = [

            // users
            'admins.read',
            'admins.create',
            'admins.edit',
            'admins.delete',

            // roles
            'roles.read',
            'roles.create',
            'roles.edit',
            'roles.delete',

            //users
            'users.read',
            'users.create',
            'users.edit',
            'users.delete',


        ];

        foreach ($adminPermissions as $permission) {
            Permission::firstOrCreate(['guard_name' => 'admin','module' => 'Admin' ,'name' => $permission]);
        }
        $adminRole->givePermissionTo($adminPermissions);
//        $admin = Admin::find(1);
//        if($admin){
//            $admin->assignRole('admin');
//        }
    }
}
