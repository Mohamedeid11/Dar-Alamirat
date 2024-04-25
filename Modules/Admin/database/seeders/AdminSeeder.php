<?php

namespace Modules\Admin\database\seeders;

use Illuminate\Database\Seeder;
use Modules\Admin\app\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::updateOrCreate([
            'id'        => 1,
            'userName'  => 'admin',
            'name'      => 'Admin',
            'email'     => 'admin@admin.com',
            'phone'     => '0123456789',
            'password'  => '123456789',
            'system'    => 1,
        ]);

    }
}
