<?php

namespace Database\Seeders;

use App\Models\Rule;
use Illuminate\Database\Seeder;

class RuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rules = [
            [
                'disease_uid' => 'P1',
                'G1'  => 1, 'G2'  => 1, 'G3'  => 1, 'G4'  => 1, 'G5'  => 1, 'G6'  => 1, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'P2',
                'G1'  => 1, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 1, 'G8'  => 1, 'G9'  => 1, 'G10' => 1,
                'G11' => 1, 'G12' => 1, 'G13' => 1, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'P3',
                'G1'  => 1, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 1, 'G15' => 1, 'G16' => 1, 'G17' => 1, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'P4',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 1, 'G19' => 1, 'G20' => 1,
                'G21' => 1, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'P5',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 1, 'G23' => 1, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'P6',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 1, 'G25' => 1, 'G26' => 1, 'G27' => 1, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'P7',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 1, 'G29' => 1, 'G30' => 1
            ],
            [
                'disease_uid' => 'T1',
                'G1'  => 1, 'G2'  => 1, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T1',
                'G1'  => 1, 'G2'  => 1, 'G3'  => 1, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T1',
                'G1'  => 1, 'G2'  => 1, 'G3'  => 1, 'G4'  => 1, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T1',
                'G1'  => 1, 'G2'  => 1, 'G3'  => 1, 'G4'  => 1, 'G5'  => 1, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T2',
                'G1'  => 1, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 1, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T2',
                'G1'  => 1, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 1, 'G8'  => 1, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T2',
                'G1'  => 1, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 1, 'G8'  => 1, 'G9'  => 1, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T2',
                'G1'  => 1, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 1, 'G8'  => 1, 'G9'  => 1, 'G10' => 1,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T2',
                'G1'  => 1, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 1, 'G8'  => 1, 'G9'  => 1, 'G10' => 1,
                'G11' => 1, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T2',
                'G1'  => 1, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 1, 'G8'  => 1, 'G9'  => 1, 'G10' => 1,
                'G11' => 1, 'G12' => 1, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T3',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 1, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T3',
                'G1'  => 1, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 1, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T3',
                'G1'  => 1, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 1, 'G15' => 1, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T3',
                'G1'  => 1, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 1, 'G15' => 1, 'G16' => 1, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T4',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 1, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T4',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 1, 'G19' => 1, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T4',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 1, 'G19' => 1, 'G20' => 1,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T5',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 1, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T6',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 1, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T6',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 1, 'G25' => 1, 'G26' => 0, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T6',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 1, 'G25' => 1, 'G26' => 1, 'G27' => 0, 'G28' => 0, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T7',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 1, 'G29' => 0, 'G30' => 0
            ],
            [
                'disease_uid' => 'T7',
                'G1'  => 0, 'G2'  => 0, 'G3'  => 0, 'G4'  => 0, 'G5'  => 0, 'G6'  => 0, 'G7'  => 0, 'G8'  => 0, 'G9'  => 0, 'G10' => 0,
                'G11' => 0, 'G12' => 0, 'G13' => 0, 'G14' => 0, 'G15' => 0, 'G16' => 0, 'G17' => 0, 'G18' => 0, 'G19' => 0, 'G20' => 0,
                'G21' => 0, 'G22' => 0, 'G23' => 0, 'G24' => 0, 'G25' => 0, 'G26' => 0, 'G27' => 0, 'G28' => 1, 'G29' => 1, 'G30' => 0
            ],
        ];

        Rule::insert($rules);
    }
}
