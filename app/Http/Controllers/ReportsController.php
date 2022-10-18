<?php

namespace App\Http\Controllers;

use App\Exports\DeliveryReportExport;
use App\Models\Report;
use App\Models\Delivery;
use App\Models\Purchase;
use Illuminate\View\View;
use Maatwebsite\Excel\Excel;
use Yajra\DataTables\DataTables;
use Illuminate\Http\JsonResponse;
use App\Exports\ProductReportExport;
use Illuminate\Http\RedirectResponse;

class ReportsController extends Controller
{

    public Excel $excel;


    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function index(): View
    {
        return view('cashier.report.index');
    }


    public function productSoldReport(): JsonResponse
    {
        return DataTables::of(Purchase::query()->with(['product', 'product.category']))
            ->addColumn('price', fn (Purchase $purchasedProduct) => '₱ ' . ($purchasedProduct->quantity * $purchasedProduct->product->purchase_price))
            ->make();
    }


    public function generateSoldProductExcelReport(): RedirectResponse
    {
        $productExcelReportName = 'SoldItemReport-' . now()->format('m-D-Y') . '.xlsx';

        $this->excel->store(new ProductReportExport, 'reports/' . $productExcelReportName, 'public', Excel::XLSX);
        Report::create(['file_name' => $productExcelReportName, 'type' => Report::$REPORT_TYPE_PRODUCTS]);

        return redirect()->back();
    }

    public function deliveryCompletedReport(): JsonResponse
    {
        $query = Delivery::query()
            ->where('status', Delivery::$DELIVERY_STATUS_COMPLETED)
            ->with(['transaction', 'transaction.purchases', 'transaction.purchases.product']);

        return Datatables::of($query)
            ->addColumn('joinedItems', function (Delivery $delivery) {
                return collect($delivery->transaction->purchases)->map(
                    fn ($value) => $value->quantity . ' ' .  $value->product->product_name
                )->join(' , ');
            })
            ->addColumn('truck_number', fn (Delivery $delivery) => 'Truck # ' . $delivery->truck_number)
            ->addColumn('sum_price', fn (Delivery $delivery) => $delivery->transaction->transactionItems->sum('price'))
            ->make();
    }

    public function generateDeliveryCompletedExcelReport()
    {
        $deliveryExcelReportName = 'DeliveryReport-' . now()->format('m-D-Y') . '.xlsx';

        $this->excel->store(new DeliveryReportExport, 'reports/' . $deliveryExcelReportName, 'public', Excel::XLSX);
        Report::create(['file_name' => $deliveryExcelReportName, 'type' => Report::$REPORT_TYPE_DELIVERY]);

        return redirect()->back();
    }
}
