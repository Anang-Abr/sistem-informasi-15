<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Supply;
use App\Models\Invoice;
use App\Models\Customer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $supplyUuid = 'supplyunique';
        $invoiceUuid = 'invoiceunique';
        $customerUuid = 'customerunique';

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Supply::factory()->create([
            'nama' => 'Indomie',
            'harga' => 4000,
            'stock' => 100
        ]);

        Supply::factory()->create([
            'nama' => 'Teh Kotak',
            'harga' => 5000,
            'stock' => 150
        ]);

        Supply::factory()->create([
            'nama' => 'Oreo',
            'harga' => 10000,
            'stock' => 20
        ]);

        Customer::factory()->create([
            'alamat' => 'Gowa',
            'no_telp' => '081234576823',
            'nama' => 'rahmat'
        ]);
        Customer::factory()->create([
            'alamat' => 'Bone',
            'no_telp' => '081234576825',
            'nama' => 'Gojo'
        ]);
        Customer::factory()->create([
            'alamat' => 'Makassar',
            'no_telp' => '081234576824',
            'nama' => 'ruhul'
        ]);
        Customer::factory()->create([
            'alamat' => 'Gowa',
            'no_telp' => '081234576821',
            'nama' => 'gazali'
        ]);

        Invoice::factory()->create([
            'supply_id' => 2,
            'customer_id' => 2,
            'jumlah' => 3,
            'total' => 15000,
            'status' => 'done'
        ]);
        Invoice::factory()->create([
            'supply_id' => 1,
            'customer_id' => 1,
            'jumlah' => 3,
            'total' => 12000,
            'status' => 'done'
        ]);
        Invoice::factory()->create([
            'supply_id' => 3,
            'customer_id' => 3,
            'jumlah' => 3,
            'total' => 30000,
            'status' => 'done'
        ]);
    }
}
