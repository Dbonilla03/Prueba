<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Blogger']);

        Permission::create(['name' => 'home'])->syncroles($role1, $role2);
        Permission::create(['name' => 'calculator'])->assignrole($role2);
        Permission::create(['name' => 'apprentices'])->syncroles($role1, $role2);
        Permission::create(['name' => 'answer'])->syncroles($role1, $role2);
    }
}
