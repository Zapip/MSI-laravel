<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ChatbotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chatbot')->insert([
            [
                'queries' => 'nama?',
                'replies' => 'Halo! Saya Zafif Ada yang bisa saya bantu?',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'queries' => 'Halo',
                'replies' => 'Halo! Ada yang bisa saya bantu?',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'queries' => 'Apa itu e-commerce?',
                'replies' => 'E-commerce adalah proses pembelian dan penjualan barang atau jasa secara elektronik melalui internet.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'queries' => 'Bagaimana cara mendaftar di web e-commerce?',
                'replies' => 'Untuk mendaftar di web e-commerce, biasanya kamu perlu membuat akun dengan mengisi form registrasi yang mencakup informasi pribadi seperti email, nama, dan password.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'queries' => 'Metode pembayaran apa yang biasanya digunakan di e-commerce?',
                'replies' => 'Metode pembayaran yang umum digunakan di e-commerce meliputi transfer bank, kartu kredit, pembayaran digital seperti GoPay dan OVO, serta pembayaran di tempat (COD).',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'queries' => 'Apa yang harus dilakukan jika barang tidak sesuai?',
                'replies' => 'Jika barang yang kamu terima tidak sesuai, kamu bisa mengajukan komplain atau meminta pengembalian barang melalui layanan customer service di platform e-commerce.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'queries' => 'Bagaimana cara mencari produk di web e-commerce?',
                'replies' => 'Kamu bisa menggunakan fitur pencarian di web e-commerce. Masukkan nama produk yang kamu cari pada kolom pencarian, dan sistem akan menampilkan produk yang relevan.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'queries' => 'Bagaimana cara melacak pesanan?',
                'replies' => 'Setelah kamu melakukan pembelian, biasanya platform e-commerce menyediakan fitur pelacakan pesanan yang bisa diakses dari halaman akun kamu.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'queries' => 'Apa kelebihan belanja di e-commerce?',
                'replies' => 'Belanja di e-commerce lebih praktis karena kamu bisa berbelanja dari mana saja dan kapan saja. Selain itu, kamu bisa membandingkan harga dari berbagai penjual dengan mudah.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
