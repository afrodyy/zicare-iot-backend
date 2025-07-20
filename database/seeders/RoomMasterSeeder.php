<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RoomMaster;

class RoomMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $room_masters = [
            "Poli Umum", "Poli Gigi", "Poli Anak", "Poli Kandungan", "Poli Bedah",
            "Poli Saraf", "Poli Jantung", "Poli Kulit dan Kelamin", "Poli THT", "Poli Mata",
            "Poli Paru", "Poli Psikiatri", "UGD", "Rawat Inap Kelas 1", "Rawat Inap Kelas 2",
            "Rawat Inap Kelas 3", "Rawat Inap VIP", "Ruang Operasi", "Ruang ICU", "Ruang NICU",
            "Ruang Radiologi", "Ruang Laboratorium", "Ruang Farmasi", "Ruang Rehabilitasi Medis",
            "Ruang Gizi", "Ruang Laktasi", "Ruang Isolasi", "Ruang Hemodialisa", "Ruang Bersalin",
            "Ruang Administrasi",
        ];

        foreach ($room_masters as $index => $name) {
            RoomMaster::create([
                'id' => $index + 1,
                'name' => $name
            ]);
        }
    }
}
