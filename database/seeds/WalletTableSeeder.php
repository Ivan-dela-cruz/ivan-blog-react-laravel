<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WalletTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wallets')->insert([
            'money'=>360,
            'created_at'=>date("Y-m-d H:m:s"),
            'updated_at'=>date("Y-m-d H:m:s")

        ]);
    }
}
