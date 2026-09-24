<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatakuliahFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_mk' => fake()->unique()->bothify('TI###'),
            'nama_mk' => fake()->randomElement([
                'Pemrograman Web',
                'Basis Data',
                'Algoritma dan Struktur Data',
                'Jaringan Komputer',
                'Sistem Operasi',
                'Rekayasa Perangkat Lunak',
            ]),
            'sks' => fake()->numberBetween(1, 4),
            'semester' => fake()->numberBetween(1, 8),
            'dosen_id' => User::inRandomOrder()->value('id'),
        ];
    }
}