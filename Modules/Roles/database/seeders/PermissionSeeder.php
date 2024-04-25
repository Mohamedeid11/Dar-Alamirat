<?php

namespace Modules\Roles\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Modules\Admin\app\Models\Admin;

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

        Admin::updateOrCreate([
            'id'        => 1,
            'userName'  => 'admin',
            'name'      => 'Admin',
            'email'     => 'admin@admin.com',
            'phone'     => '0123456789',
            'password'  => '123456789',
            'system'    => 1,
        ]);

        $admin = Admin::find(1);
        if($admin){
            $admin->assignRole('admin');
        }
    }
}
