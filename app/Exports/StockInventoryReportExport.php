<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StockInventoryReportExport implements FromQuery, WithHeadings, WithMapping
{

    use Exportable;

    public function query()
    {
        return Product::query()
            ->with('category')
            ->whereMonth('created_at', now());
    }


    public function headings(): array
    {
        return [
            'id',
            'Product Name',
            'Category',
            'quantity',
            'price',
            'purchase_price'
        ];
    }


    public function map($product): array
    {
        return [
            $product->id,
            $product->product_name,
            $product->category->category_name,
            $product->quantity,
            $product->price,
            $product->purchase_price,
        ];
    }
}
