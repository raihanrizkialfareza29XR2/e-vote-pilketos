<?php

declare(strict_types = 1);

namespace App\Charts;

use Chartisan\PHP\Chartisan;
use ConsoleTVs\Charts\BaseChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pemilih;

class SampleChart extends BaseChart
{
    /**
     * Handles the HTTP request for the given chart.
     * It must always return an instance of Chartisan
     * and never a string or an array.
     */
    public function handler(Request $request): Chartisan
    {
        $ang28 = Pemilih::select('*')
                              ->where('name', 'LIKE', '%'.'28'.'%')
                              ->where('status' , 2)->get()->toArray();
        return Chartisan::build()
            ->labels(['Angkatan 28', 'Angkatan 29', 'Angkatan 30'])
            ->dataset('samp', Pemilih::select('*')
                                ->where('name', 'LIKE', '%'.'28'.'%')
                                ->where('status' , 2)->get()->toArray());
    }
}