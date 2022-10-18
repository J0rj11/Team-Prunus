<?php

namespace App\Exports;

use App\Models\Delivery;
use App\Models\Purchase;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class DeliveryReportExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;


    public function query()
    {
        return Delivery::query()
            ->where('status', Delivery::$DELIVERY_STATUS_COMPLETED)
            ->with('transaction', 'transaction.purchases', 'transaction.purchases.product')
            ->whereMonth('created_at', now());
    }


    public function headings(): array
    {
        return [
            'id',
            'Date of Delivery',
            'Driver',
            'Truck Number',
            'Client Name',
            'Items'
        ];
    }


    public function map($delivery): array
    {
        return [
            $delivery->id,
            $delivery->created_at->format('m-D-Y'),
            $delivery->driver_name,
            $delivery->truck_number,
            $delivery->transaction->transaction_name,
            $delivery->transaction->purchases->map(fn (Purchase $value) => $value->quantity . ' ' . $value->product->product_name)->join(' , '),
        ];
    }
}
