<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServisRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_pemilik' => 'required|string|max:255',
            'nomor_polisi' => 'required|string|max:20',
            'jenis_kendaraan' => 'required|string|max:255',
            'keluhan' => 'required|string',
            'jenis_servis' => 'required|string|max:255',
            'tanggal_servis' => 'required|date',
            'biaya' => 'required|integer|min:0',
            'status' => 'required|in:menunggu,dikerjakan,selesai'
        ];
    }
}
