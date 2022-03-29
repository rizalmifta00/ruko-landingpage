<?php

use Illuminate\Database\Seeder;
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
        $role = [
                    ['name'=>'Kepala Tata Usaha'],
                    ['name'=>'Kepala Bagian Keuangan'],
                    ['name'=>'Bendara Penerimaan'],
                    ['name'=>'Bendara Pengeluraan'],
                    ['name'=>'Super Admin']
        ];
        Role::insert($role);
    }
}
