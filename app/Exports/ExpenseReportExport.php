<?php

namespace App\Exports;

use App\Models\Expense;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExpenseReportExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;

    public function query()
    {
        return Expense::query()
            ->whereMonth('created_at', now());
    }


    public function headings(): array
    {
        return [
            'id',
            'Date of Expense',
            'Expense Account',
            'Amount',
            'Notes'
        ];
    }


    public function map($expense): array
    {
        return [
            $expense->id,
            $expense->expense_date->format('m-D-Y'),
            $expense->expense_account,
            $expense->amount,
            $expense->notes ?? 'No Notes',
        ];
    }
}
