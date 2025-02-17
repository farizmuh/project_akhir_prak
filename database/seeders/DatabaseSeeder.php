<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Matakuliah;
use App\Models\Prodi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MatakuliahSeeder::class,
            ProdiSeeder::class,
        ]);
        $prodi = Prodi::all()->toArray();
        $mahasiswas = Mahasiswa::factory()->count(100)->create();
    }
}
