<?php

namespace App\Exports;

use App\Models\Absent;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class AbsentExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Ambil semua pengguna
        $users = User::all();
        
        // Array untuk menyimpan jumlah kehadiran masing-masing siswa
        $attendanceCounts = [];

        // Hitung jumlah kehadiran untuk setiap pengguna
        foreach ($users as $user) {
            $attendanceCount = Absent::where('user_id', $user->id)->count();
            $attendanceCounts[$user->id] = $attendanceCount;
        }

        // Temukan jumlah kehadiran terbanyak
        $maxAttendance = max($attendanceCounts);

        // Array untuk menyimpan hasil akhir
        $results = [];

        foreach ($users as $user) {
            // Jumlah kehadiran untuk pengguna ini
            $attendanceCount = $attendanceCounts[$user->id];

            // Hitung persentase kehadiran berdasarkan jumlah kehadiran terbanyak
            $attendancePercentage = ($attendanceCount / $maxAttendance) * 100;

            // Tambahkan data ke hasil akhir
            $results[] = [
                'name' => $user->name,
                'nisn' => $user->nisn,
                'attendance' => round($attendancePercentage, 2) . '%',
            ];
        }

        // Kembalikan koleksi hasil akhir
        return collect($results);
    }

    public function headings(): array
    {
        return [
            'Name',
            'NISN',
            'Kehadiran',
        ];
    }
}
