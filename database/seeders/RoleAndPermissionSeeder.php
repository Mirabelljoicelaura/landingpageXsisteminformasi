<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'dashboard']);
        Permission::create(['name' => 'user.management']);
        Permission::create(['name' => 'role.permission.management']);
        Permission::create(['name' => 'menu.management']);
        Permission::create(['name' => 'penduduk.management']);
        Permission::create(['name' => 'organisasi.management']);
        Permission::create(['name' => 'sosial.management']);
        Permission::create(['name' => 'agenda.management']);
        Permission::create(['name' => 'potensi.management']);
        Permission::create(['name' => 'galeri.management']);        

        //user
        Permission::create(['name' => 'user.index']);
        Permission::create(['name' => 'user.create']);
        Permission::create(['name' => 'user.edit']);
        Permission::create(['name' => 'user.destroy']);
        Permission::create(['name' => 'user.import']);
        Permission::create(['name' => 'user.export']);

        //penduduk
        Permission::create(['name' => 'penduduk.index']);
        Permission::create(['name' => 'penduduk.create']);
        Permission::create(['name' => 'penduduk.edit']);
        Permission::create(['name' => 'penduduk.destroy']);
        
        //keluarga
        Permission::create(['name' => 'keluarga.index']);
        Permission::create(['name' => 'keluarga.create']);
        Permission::create(['name' => 'keluarga.edit']);
        Permission::create(['name' => 'keluarga.destroy']);
        
        //bantuan
        Permission::create(['name' => 'bantuan.index']);
        Permission::create(['name' => 'bantuan.create']);
        Permission::create(['name' => 'bantuan.edit']);
        Permission::create(['name' => 'bantuan.destroy']);

        //organisasi
        Permission::create(['name' => 'organisasi.index']);
        Permission::create(['name' => 'organisasi.create']);
        Permission::create(['name' => 'organisasi.edit']);
        Permission::create(['name' => 'organisasi.destroy']);

        //sosial
        Permission::create(['name' => 'sosial.index']);
        Permission::create(['name' => 'sosial.create']);
        Permission::create(['name' => 'sosial.edit']);
        Permission::create(['name' => 'sosial.destroy']);

        //agenda
        Permission::create(['name' => 'agenda.index']);
        Permission::create(['name' => 'agenda.create']);
        Permission::create(['name' => 'agenda.edit']);
        Permission::create(['name' => 'agenda.destroy']);

        //potensi
        Permission::create(['name' => 'potensi.index']);
        Permission::create(['name' => 'potensi.create']);
        Permission::create(['name' => 'potensi.edit']);
        Permission::create(['name' => 'potensi.destroy']);

        //galeri
        Permission::create(['name' => 'galeri.index']);
        Permission::create(['name' => 'galeri.create']);
        Permission::create(['name' => 'galeri.edit']);
        Permission::create(['name' => 'galeri.destroy']);

        //role
        Permission::create(['name' => 'role.index']);
        Permission::create(['name' => 'role.create']);
        Permission::create(['name' => 'role.edit']);
        Permission::create(['name' => 'role.destroy']);
        Permission::create(['name' => 'role.import']);
        Permission::create(['name' => 'role.export']);

        //permission
        Permission::create(['name' => 'permission.index']);
        Permission::create(['name' => 'permission.create']);
        Permission::create(['name' => 'permission.edit']);
        Permission::create(['name' => 'permission.destroy']);
        Permission::create(['name' => 'permission.import']);
        Permission::create(['name' => 'permission.export']);

        //assignpermission
        Permission::create(['name' => 'assign.index']);
        Permission::create(['name' => 'assign.create']);
        Permission::create(['name' => 'assign.edit']);
        Permission::create(['name' => 'assign.destroy']);

        //assingusertorole
        Permission::create(['name' => 'assign.user.index']);
        Permission::create(['name' => 'assign.user.create']);
        Permission::create(['name' => 'assign.user.edit']);

        //menu group
        Permission::create(['name' => 'menu-group.index']);
        Permission::create(['name' => 'menu-group.create']);
        Permission::create(['name' => 'menu-group.edit']);
        Permission::create(['name' => 'menu-group.destroy']);

        //menu item
        Permission::create(['name' => 'menu-item.index']);
        Permission::create(['name' => 'menu-item.create']);
        Permission::create(['name' => 'menu-item.edit']);
        Permission::create(['name' => 'menu-item.destroy']);

        // create roles
        // $roleUser = Role::create(['name' => 'user']);
        // $roleUser->givePermissionTo([
        //     'dashboard',
        //     'user.management',
        //     'user.index',
        // ]);

        // create Super Admin
        $role = Role::create(['name' => 'super-admin']);
        $role->givePermissionTo(Permission::all());

        //assign user id 1 ke super admin
        $user = User::find(1);
        $user->assignRole('super-admin');
        // $user = User::find(2);
        // $user->assignRole('user');
    }
}
