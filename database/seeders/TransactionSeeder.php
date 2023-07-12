<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;
use Psy\Readline\Transient;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = [
            [
            'receipt_no'=>'AWS9023',
            'amount'=>60000.00,
            'academic_session'=>now(),
            'remark'=>'paid',
            'user_id'=>'1',
            ],
        ];

        foreach ($transactions as $key => $transaction) {
            Transaction::create($transaction);
        }
    }
}
