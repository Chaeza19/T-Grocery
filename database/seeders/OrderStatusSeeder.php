<?php

namespace Database\Seeders;

use App\Models\OrderStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statuses = [
            [
                "name" =>  "mart agree",
                "message" => "Menunggu Pihak Mart Menyetujui",
            ],
            [
                "name" =>  "payment",
                "message" => "Pesanan Telah Disetujui Silahkan Pilih Metode Pembayaran",
            ],
            [
                "name" =>  "confirm",
                "message" => "Menunggu Konfirmasi Pihak Mart",
            ],
            [
                "name" =>  "process",
                "message" => "Terimakasih! Pesanan Akan Kami Proses",
            ],
            [
                "name" =>  "selesai",
                "message" => "Pesanan Telah Sampai Terimakasih",
            ],
        ];
        foreach ($statuses as $status) {
            OrderStatus::create($status);
        }
    }
}
