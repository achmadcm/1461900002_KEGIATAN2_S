<?php

namespace Database\Seeders;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mhs1= new Mahasiswa()
        $mhs1->nbi = "1461900002";
        $mhs1->nama_mhs = "achmadchusni mubarok";
        $mhs1->save();

    }
}
