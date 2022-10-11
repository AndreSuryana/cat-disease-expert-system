<?php

namespace Database\Seeders;

use App\Models\Disease;
use Illuminate\Database\Seeder;

class DiseaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diseases = [
            ['uid' => 'P1', 'description' => 'Distemper Kucing'],
            ['uid' => 'P2', 'description' => 'Ingus Jahat pada Kucing'],
            ['uid' => 'P3', 'description' => 'Leptosiprosis pada Kucing'],
            ['uid' => 'P4', 'description' => 'Scabies'],
            ['uid' => 'P5', 'description' => 'Leukemia pada Kucing'],
            ['uid' => 'P6', 'description' => 'Ringworm'],
            ['uid' => 'P7', 'description' => 'Infeksi Telinga'],
            ['uid' => 'T1', 'description' => 'Kemungkinan mengalami Distemper Kucing'],
            ['uid' => 'T2', 'description' => 'Kemungkinan mengalami Ingus Jahat pada Kucing'],
            ['uid' => 'T3', 'description' => 'Kemungkinan mengalami Leptosiprosis pada Kucing'],
            ['uid' => 'T4', 'description' => 'Kemungkinan mengalami Scabies'],
            ['uid' => 'T5', 'description' => 'Kemungkinan mengalami Leukemia pada Kucing'],
            ['uid' => 'T6', 'description' => 'Kemungkinan mengalami Ringworm'],
            ['uid' => 'T7', 'description' => 'Kemungkinan mengalami Infeksi Telinga'],
        ];

        Disease::insert($diseases);
    }
}
