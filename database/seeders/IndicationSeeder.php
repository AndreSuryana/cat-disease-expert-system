<?php

namespace Database\Seeders;

use App\Models\Indication;
use Illuminate\Database\Seeder;

class IndicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indications = [
            ['uid' => 'G1', 'name' => 'Demam dengan suhu badan 41-42°C'],
            ['uid' => 'G2', 'name' => 'Diare'],
            ['uid' => 'G3', 'name' => 'Dehidrasi'],
            ['uid' => 'G4', 'name' => 'Depresi hebat'],
            ['uid' => 'G5', 'name' => 'Muntah'],
            ['uid' => 'G6', 'name' => 'Nyeri lambung'],
            ['uid' => 'G7', 'name' => 'Hilang nafsu makan'],
            ['uid' => 'G8', 'name' => 'Bersin'],
            ['uid' => 'G9', 'name' => 'Depresif'],
            ['uid' => 'G10', 'name' => 'Keluar air mata berlebihan'],
            ['uid' => 'G11', 'name' => 'Keluar air liur berlebihan'],
            ['uid' => 'G12', 'name' => 'Ingus mengental yang mulai keluar dari lubang hidung'],
            ['uid' => 'G13', 'name' => 'Luka di selaput hidung, mulut, bibir, atau lidah'],
            ['uid' => 'G14', 'name' => 'Tidak mau makan'],
            ['uid' => 'G15', 'name' => 'Timbul warna kuning kehijauan pada mata, gusi, bibir, dan kulit'],
            ['uid' => 'G16', 'name' => 'Lemah'],
            ['uid' => 'G17', 'name' => 'Mata bengkak kemerahan'],
            ['uid' => 'G18', 'name' => 'Bulu rontok di sekitar telinga'],
            ['uid' => 'G19', 'name' => 'Di pinggir daun telinga ada kerak putih'],
            ['uid' => 'G20', 'name' => 'Kucing sering menggaruk-garuk'],
            ['uid' => 'G21', 'name' => 'Penebalan dan keriput pada kulit yang di tutupi kerak yang berwarna abu-abu kekuningan'],
            ['uid' => 'G22', 'name' => 'Sulit bernapas'],
            ['uid' => 'G23', 'name' => 'Anemia tampak dari gusi dan bibir pucat'],
            ['uid' => 'G24', 'name' => 'Bercak bulat di kulit'],
            ['uid' => 'G25', 'name' => 'Buku rontok (botak) setempat'],
            ['uid' => 'G26', 'name' => 'Kulit berkerak'],
            ['uid' => 'G27', 'name' => 'Terjadi nodula (benjol-benjol bernanah)'],
            ['uid' => 'G28', 'name' => 'Telinganya terlihat bengkak'],
            ['uid' => 'G29', 'name' => 'Keluar cairan dari dalam telinga'],
            ['uid' => 'G30', 'name' => 'Kucing sering menggelengkan kepala']
        ];

        Indication::insert($indications);
    }
}
