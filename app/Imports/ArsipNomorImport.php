<?php

namespace App\Imports;

use App\Models\Sekretariat\ArsipNomor;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ArsipNomorImport implements ToModel, WithHeadingRow, WithBatchInserts
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ArsipNomor([
            'kode' => $row['kode_surat'],
            'desc' => $row['deskripsi_surat']
        ]);

    }

    /**
     * @return int
     */
    public function batchSize(): int
    {
        return 5;
    }
}
