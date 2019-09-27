<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permission = [
            [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Можеть создать новый роль'
            ],
            [
                'name' => 'role-list',
                'display_name' => 'Display Role Listing',
                'description' => 'Можеть видеть все ролей'
            ],
            [
                'name' => 'role-update',
                'display_name' => 'Update Role',
                'description' => 'Можеть изменить ролей'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Можеть удалить ролей'
            ],
            [
                'name' => 'user-create',
                'display_name' => 'Create User',
                'description' => 'Можеть создать новый пользователь'
            ],
            [
                'name' => 'user-list',
                'display_name' => 'Display User Listing',
                'description' => 'Можеть видеть все пользователей'
            ],
            [
                'name' => 'user-update',
                'display_name' => 'Update User',
                'description' => 'Можеть изменить данные пользователей'
            ],
            [
                'name' => 'user-delete',
                'display_name' => 'Delete User',
                'description' => 'Можеть удалить пользователей'
            ],
           
        ];
        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
