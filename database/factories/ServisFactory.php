<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServisFactory extends Factory
{
    protected $model = \App\Models\Servis::class;

    public function definition()
    {
        return [
            'nama_pemilik' => $this->faker->name,
            'nomor_polisi' => strtoupper($this->faker->bothify('?? #### ??')),
            'jenis_kendaraan' => $this->faker->randomElement(['Mobil', 'Motor', 'Truk']),
            'keluhan' => $this->faker->sentence,
            'jenis_servis' => $this->faker->randomElement(['Ganti Oli', 'Tune Up', 'Service Ringan', 'Service Berat']),
            'tanggal_servis' => $this->faker->date(),
            'biaya' => $this->faker->numberBetween(100000, 500000),
            'status' => $this->faker->randomElement(['menunggu', 'dikerjakan', 'selesai']),
        ];
    }
}
