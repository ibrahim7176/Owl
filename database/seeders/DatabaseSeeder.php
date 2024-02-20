<?php

namespace Database\Seeders;

// use CouponSeeder;
// use UsersTableSeeder;
// use SettingTableSeeder;
use Illuminate\Database\Seeder;
use CouponSeeder\CouponSeeder as CouponSeederCouponSeeder;
use SettingTableSeeder\SettingTableSeeder as SettingTableSeederSettingTableSeeder;
use UsersTableSeeder\UsersTableSeeder as UsersTableSeederUsersTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeederUsersTableSeeder::class,
            SettingTableSeederSettingTableSeeder::class,
            CouponSeederCouponSeeder::class
        ]);
    }
}
