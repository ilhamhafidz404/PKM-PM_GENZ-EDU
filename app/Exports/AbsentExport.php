<?php
namespace App\Exports;

use App\Models\Absent;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;

class AbsentExport implements FromCollection, WithHeadings, WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Ambil semua pengguna
        $users = User::with("classroom")->get();
        
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
                'nisn' => $user->nisn,
                'name' => $user->name,
                'classroom' => $user->classroom->name,
                'attendance' => round($attendancePercentage, 2) . '%',
            ];
        }

        // Kembalikan koleksi hasil akhir
        return collect($results);
    }

    public function headings(): array
    {
        return [
            'NISN',
            'Nama',
            'Kelas',
            'Kehadiran',
        ];
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getDelegate()->setAutoFilter(
                    $event->sheet->getDelegate()->calculateWorksheetDimension()
                );
            },
        ];
    }
}
