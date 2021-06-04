<?php

namespace App\Exports;

use App\Models\Movie;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MovieExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Movie::select('title', 'rating', 'price')->released()->get();
    }

    public function headings(): array
    {
        return ["Título", "Rating", "Fecha de estreno"];
    }
}
