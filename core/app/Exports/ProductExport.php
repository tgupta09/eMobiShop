<?php

namespace App\Exports;

use App\Models\productmodel;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ProductExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function headings(): array
    {
        return [
            'Id',
            'Product Name',
            'Brand',
            'Category',
            'Price',
            'Description',
            'Sku',
            'UserEmail'
        ];
    }

    public function collection()
    {
        return productmodel::all();
    }
}
