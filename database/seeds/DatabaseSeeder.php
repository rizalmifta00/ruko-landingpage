<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'Super Admin']);
        Role::create(['name' => 'Buyer']);
        Role::create(['name' => 'Seller']);

        $admin = User::create([
            'name'      => 'Developer',
            'email'     => 'developer@dev.com',
            'password'  =>  bcrypt('devpass'),
        ]);
        $admin->assignRole('Super Admin');
    }
}
