<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Payment::create([
           "payment_name" => 'COD',
           "payment_category" => 'Cash payment',
       ]);
       Payment::create([
           "payment_name" => 'Bkash',
           "payment_category" => 'Mobile Banking',
       ]);
       Payment::create([
           "payment_name" => 'Nagad',
           "payment_category" => 'Mobile Banking',
       ]);
       Payment::create([
           "payment_name" => 'Rocket',
           "payment_category" => 'Mobile Banking',
       ]);
       Payment::create([
           "payment_name" => 'E-wallet',
           "payment_category" => 'Wallet payment',
       ]);
       Payment::create([
           "payment_name" => 'card',
           "payment_category" => 'card payment',
       ]);
    }
}
