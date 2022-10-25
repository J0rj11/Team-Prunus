<?php

namespace App\Console\Commands;

use App\Models\Report;
use Maatwebsite\Excel\Excel;
use Illuminate\Console\Command;
use App\Exports\ExpenseReportExport;
use App\Exports\ProductReportExport;
use App\Exports\DeliveryReportExport;

class ExportDailyReports extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:export-daily-reports';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export Daily Reports for Admin';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(Excel $excel)
    {
        $this->exportDailyProductReports($excel);
        $this->generateDailyDeliveryReports($excel);
        $this->generateDailyExpenseReports($excel);

        return Command::SUCCESS;
    }

    private function exportDailyProductReports(Excel $excel): void
    {
        $productExcelReportName = 'SoldItemReport-' . now()->format('m-D-Y') . '.xlsx';

        $excel->store(new ProductReportExport(), 'reports/' . $productExcelReportName, 'public', Excel::XLSX);
        Report::create(['file_name' => $productExcelReportName, 'type' => Report::$REPORT_TYPE_PRODUCTS]);
    }

    private function generateDailyDeliveryReports(Excel $excel) : void
    {
        $deliveryExcelReportName = 'DeliveryReport-' . now()->format('m-D-Y') . '.xlsx';

        $excel->store(new DeliveryReportExport(), 'reports/' . $deliveryExcelReportName, 'public', Excel::XLSX);
        Report::create(['file_name' => $deliveryExcelReportName, 'type' => Report::$REPORT_TYPE_DELIVERY]);
    }

    private function generateDailyExpenseReports(Excel $excel): void
    {
        $expenseExcelReportName = 'ExpenseReport-' . now()->format('m-D-Y') . '.xlsx';

        $excel->store(new ExpenseReportExport(), 'reports/' . $expenseExcelReportName, 'public', Excel::XLSX);
        Report::create(['file_name' => $expenseExcelReportName, 'type' => Report::$REPORT_TYPE_EXPENSES]);
    }
}
