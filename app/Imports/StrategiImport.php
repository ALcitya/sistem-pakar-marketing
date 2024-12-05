<?php

namespace App\Imports;

use App\Models\Strategi;
use Maatwebsite\Excel\Concerns\ToModel;

class StrategiImport implements ToModel
{
    public function model(array $row)
{
    // Validasi untuk memastikan kolom tidak kosong
    if (empty($row['Kode']) || empty($row['Jenis'])) {
        return null;  // Skip baris jika ada kolom yang kosong
    }
    dd($row);
    return new Strategi([
        'Kode' => $row['Kode'],
        'Jenis' => $row['Jenis'],
    ]);
}
}