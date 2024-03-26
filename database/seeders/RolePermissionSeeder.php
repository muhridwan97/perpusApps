<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name'=>'tambah-user']);
        Permission::create(['name'=>'edit-user']);
        Permission::create(['name'=>'hapus-user']);
        Permission::create(['name'=>'lihat-user']);

        Permission::create(['name'=>'tambah-pinjaman']);
        Permission::create(['name'=>'edit-pinjaman']);
        Permission::create(['name'=>'hapus-pinjaman']);
        Permission::create(['name'=>'lihat-pinjaman']);

        Role::create(['name'=>'admin']);
        Role::create(['name'=>'user']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo('tambah-user');
        $roleAdmin->givePermissionTo('edit-user');
        $roleAdmin->givePermissionTo('hapus-user');
        $roleAdmin->givePermissionTo('lihat-user');
        $roleAdmin->givePermissionTo('tambah-pinjaman');
        $roleAdmin->givePermissionTo('edit-pinjaman');
        $roleAdmin->givePermissionTo('hapus-pinjaman');
        $roleAdmin->givePermissionTo('lihat-pinjaman');

        $roleUser = Role::findByName('user');
        $roleUser->givePermissionTo('tambah-pinjaman');
        $roleUser->givePermissionTo('edit-pinjaman');
        $roleUser->givePermissionTo('hapus-pinjaman');
        $roleUser->givePermissionTo('lihat-pinjaman');
    }
}
