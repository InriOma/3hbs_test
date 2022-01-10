<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Roles admin, operations
        $admin = Role::create(['name' => 'admin']);
        $operations = Role::create(['name' => 'operations']);

        //Permission list
        Permission::create(['name' => 'airlines.index']);
        Permission::create(['name' => 'airlines.create']);
        Permission::create(['name' => 'airlines.show']);
        Permission::create(['name' => 'airlines.edit']);
        Permission::create(['name' => 'airlines.delete']);

        Permission::create(['name' => 'airports.index']);
        Permission::create(['name' => 'airports.create']);
        Permission::create(['name' => 'airports.show']);
        Permission::create(['name' => 'airports.edit']);
        Permission::create(['name' => 'airports.delete']);

        Permission::create(['name' => 'flights.index']);
        Permission::create(['name' => 'flights.create']);
        Permission::create(['name' => 'flights.show']);
        Permission::create(['name' => 'flights.edit']);
        Permission::create(['name' => 'flights.delete']);



        $admin->givePermissionTo(Permission::all());

        $operations->givePermissionTo([
            'airlines.index',
            'airlines.edit',
            'airlines.show',
            'airlines.create',
            'airports.index',
            'airports.edit',
            'airports.show',
            'airports.create',
            'flights.index',
            'flights.edit',
            'flights.show',
            'flights.create',
        ]);


        //User Admin
        $admin = User::find(1); // admin
        $admin->assignRole('admin');

         //User operations
        $operations = User::find(2); // operations
        $operations->assignRole('operations');

    }
}