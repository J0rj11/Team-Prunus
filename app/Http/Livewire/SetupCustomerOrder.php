<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Reservation;
use App\Models\ReservationItem;
use App\Models\TransactionItem;

class SetupCustomerOrder extends Component
{



    public $products = [];
    public $categories = [];
    public $confirmedProducts = [];

    public $selectedCategory = NULL;
    public $selectedProduct = NULL;
    public $productQuantity = 0;
    public $productPrice = 0;
    public $selectedProductTotal = 0;
    public $paymentMethod = 0;
    public $dateOfDelivery = NULL;


    protected $rules = [
        'selectedCategory' => 'required',
        'selectedProduct' => 'required',
        'dateOfDelivery' => 'required',
    ];

    public function mount()
    {
        $this->categories = Category::all();
        $this->selectedCategory = collect($this->categories)->first();
        $this->products = $this->categories->first()->products()->get();
        $this->selectedProduct = collect($this->products)->first();
    }

    public function render()
    {
        return view('livewire.setup-customer-order');
    }


    public function updatedSelectedCategory($category): void
    {
        $this->selectedCategory = collect($this->categories)->first(fn ($value) => $value->id == $category);
        $this->products = Product::where('category_id', $category)
            ->get();
        $this->updatedSelectedProduct($this->products->first()->id);
    }


    public function updatedSelectedProduct($product): void
    {
        $this->selectedProduct = collect($this->products)->first(fn ($value) => $value->id == $product);
    }


    public function updatedProductQuantity($productQuantity): void
    {
        $this->productQuantity = $productQuantity;
        $this->productPrice =  $productQuantity * (float)$this->selectedProduct['price'];
    }

    public function updatePaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    public function confirmProduct(): void
    {
        $this->confirmedProducts[] = [
            'category' => $this->selectedCategory,
            'product' => $this->selectedProduct,
            'quantity' => $this->productQuantity,
            'price' => $this->productPrice,
        ];

        $this->selectedProductTotal = collect($this->confirmedProducts)->sum('price');
        $this->reset(['productQuantity', 'productPrice']);
    }


    public function removeProduct($index): void
    {
        unset($this->confirmedProducts[$index]);
    }



    public function save(): void
    {

        $reservation = Reservation::create([
            'user_id' => auth()->id(),
            'date_of_delivery' => $this->dateOfDelivery,
            'payment_method' => $this->paymentMethod
        ]);

        $reservationItems = [];
        $createdAt = now();
        foreach ($this->confirmedProducts as $confirmedProduct) {
            $reservationItems[] = [
                'product_id' => (int)$confirmedProduct['product']['id'],
                'reservation_id' => $reservation->id,
                'price' => (float)$confirmedProduct['price'],
                'quantity'  => (int)$confirmedProduct['quantity'],
                'created_at' => $createdAt,
                'updated_at' => $createdAt
            ];
        }

        ReservationItem::insert($reservationItems);

        redirect()->route('customer.dashboard.index');
    }
}
