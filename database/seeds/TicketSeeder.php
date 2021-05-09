<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            [
                'type' => 'presale-1',
                'stock' => 130,
                'price' => 85000,
                'description' => 'Berbagai bahasan mengenai budaya populer akan diulik dalam TED Talks oleh beragam speakers melalui perspektif dari background masing-masing. Dilengkapi dengan Virtual Exhibition dan Special Performance yang atraktif.'
            ],
            [
                'type' => 'presale-2',
                'stock' => 120,
                'price' => 100000,
                'description' => 'Sudut pandang dari berbagai speakers akan ditungkan lebih jelas dalam TED Talks yang akan hadir. Tidak ketinggalan, terdapat Special Performance dan Virtual Exhibition yang menarik.'
            ]
        ]);
    }
}
