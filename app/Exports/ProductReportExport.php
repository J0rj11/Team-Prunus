<?php

namespace App\Exports;


use App\Models\Purchase;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductReportExport implements FromQuery, WithHeadings, WithMapping
{

    use Exportable;
    /**
     * 
     */
    public function query()
    {
        return Purchase::query()
            ->with('product', 'product.category')
            ->whereMonth('created_at', now());
    }


    public function headings(): array
    {
        return [
            'id',
            'Product Name',
            'Quantity',
            'Purchase Price',
            'Sale',
            'Category'
        ];
    }


    public function map($purchasedProduct): array
    {
        return [
            $purchasedProduct->id,
            $purchasedProduct->product->product_name,
            $purchasedProduct->quantity,
            $purchasedProduct->product->purchase_price,
            $purchasedProduct->quantity * $purchasedProduct->product->purchase_price,
            $purchasedProduct->product->category->category_name,
        ];
    }
}
