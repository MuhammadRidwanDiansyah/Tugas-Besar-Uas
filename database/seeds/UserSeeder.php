<?php

use Illuminate\Database\Seeder;
use App\User;//model table use

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'Muhammad Ridwan';
        $inputan['email'] = 'ridwandiansyah2@gmail.com';//ganti pake emailmu
        $inputan['password'] = Hash::make('nawdir12');//passwordnya 123258
        $inputan['phone'] = '089657442830';
        $inputan['alamat'] = 'Jalan Waas No 83 Rt 03 Rw 05';
        $inputan['role'] = 'admin';//kita akan membuat akun atau users in dengan role admin
        User::create($inputan);
    }
}
