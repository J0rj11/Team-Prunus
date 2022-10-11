<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\RedirectResponse;
use Livewire\Component;

class SetupCustomerTransaction extends Component
{

    public Transaction $transaction;

    public $products = [];
    public $categories = [];
    public $confirmedProducts = [];

    public $selectedCategory = NULL;
    public $selectedProduct = NULL;
    public $productQuantity = 0;
    public $productPrice = 0;


    protected $rules = [
        'selectedCategory' => 'required',
        'selectedProduct' => 'required',
    ];

    public function mount(Transaction $transaction)
    {
        $this->transaction = $transaction;
        $this->categories = Category::all();
        $this->selectedCategory = collect($this->categories)->first();
        $this->products = $this->categories->first()->products()->get();
        $this->selectedProduct = collect($this->products)->first();
    }

    public function render()
    {
        return view('livewire.setup-customer-transaction');
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



    public function confirmProduct(): void
    {
        $this->confirmedProducts[] = [
            'category' => $this->selectedCategory,
            'product' => $this->selectedProduct,
            'quantity' => $this->productQuantity,
            'price' => $this->productPrice,
        ];

        $this->reset(['productQuantity', 'productPrice']);
    }


    public function removeProduct($index): void
    {
        unset($this->confirmedProducts[$index]);
    }



    public function save(): void
    {
        $transactionItems = [];
        $createdAt = now();
        foreach ($this->confirmedProducts as $confirmedProduct) {
            $transactionItems[] = [
                'product_id' => (int)$confirmedProduct['product']['id'],
                'transaction_id' => $this->transaction->id,
                'price' => (float)$confirmedProduct['price'],
                'quantity'  => (int)$confirmedProduct['quantity'],
                'created_at' => $createdAt,
                'updated_at' => $createdAt
            ];
        }

        TransactionItem::insert($transactionItems);

        redirect()->route('transaction.index');
    }
}
