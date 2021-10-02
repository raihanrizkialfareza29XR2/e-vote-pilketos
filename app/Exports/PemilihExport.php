<?php

namespace App\Exports;

use App\Models\Pemilih;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class PemilihExport implements FromView
{
    use Exportable;


    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exports.pemilih', [
            'users' => Pemilih::all()
        ]);
    }
}
