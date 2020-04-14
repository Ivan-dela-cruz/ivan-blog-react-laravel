<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transfers')->insert([
            [
                'description'=>'compra',
                'amount'=>354,
                'wallet_id'=>1,
                'created_at'=>date("Y-m-d H:m:s"),
                'updated_at'=>date("Y-m-d H:m:s"),
            ],
            [
                'description'=>'renta',
                'amount'=>280,
                'wallet_id'=>1,
                'created_at'=>date("Y-m-d H:m:s"),
                'updated_at'=>date("Y-m-d H:m:s"),
            ]
        ]);
    }
}
