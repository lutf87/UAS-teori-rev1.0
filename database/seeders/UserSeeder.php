<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'Faisol Lutfi';
        $inputan['email'] = 'admin@gmail.com';
        $inputan['password'] = Hash::make('password');
        $inputan['phone'] = '081803366228';
        $inputan['alamat'] = 'Kediri';
        $inputan['role'] = 'admin';
        User::create($inputan);
    }
}
