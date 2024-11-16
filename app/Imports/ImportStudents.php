<?php

namespace App\Imports;

use App\Models\Student;
use App\Models\Departement;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportStudents implements ToModel
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        $birthday = \DateTime::createFromFormat('Y-m-d', $row[5]) ?: \DateTime::createFromFormat('d F Y', $row[5]);

        $departement = Departement::where('name_department', $row[14])->first();

        return new Student([
            'nis' => $row[0] ?? null,
            'nisn' => $row[1] ?? null,
            'name' => $row[2] ?? null,
            'gender' => $row[3] === 'L' ? 'Laki - Laki' : ($row[3] === 'P' ? 'Perempuan' : null),
            'tempatl' => $row[4] ?? null,
            'birthday' => $birthday ? $birthday->format('Y-m-d') : null,
            'agama' => $row[6] ?? null,
            'kwnegara' => $row[7] ?? null,
            'statusdk' => $row[8] ?? null,
            'anakke' => $row[9] ?? null,
            'alamat' => $row[10] ?? null,
            'contact' => $row[11] ?? null,
            'asekolah' => $row[12] ?? null,
            'classroom_id' => $row[13] ?? null,
            'departement_id' => $departement ? $departement->id : null,
            'nayah' => $row[15] ?? null,
            'nibu' => $row[16] ?? null,
            'pkrjnayah' => $row[17] ?? null,
            'pkrjnibu' => $row[18] ?? null,
            'alamatot' => $row[19] ?? null,
            'contactot' => $row[20] ?? null,
            'nwali' => $row[21] ?? null,
            'pkrjnwali' => $row[22] ?? null,
            'alamatwali' => $row[23] ?? null,
            'contactw' => $row[24] ?? null,
        ]);
    }
}
