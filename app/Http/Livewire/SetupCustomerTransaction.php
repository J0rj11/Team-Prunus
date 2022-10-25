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

    public $selectedCategory = null;
    public $selectedProduct = null;
    public $productQuantity = 0;
    public $productPrice = 0;
    public $selectedProductTotal = 0;

    protected $rules = [
        'selectedCategory' => 'required',
        'selectedProduct' => 'required',
    ];

    public function mount(Transaction $transaction)
    {
        $this->transaction = $transaction;
        $this->categories = Category::all();
        $this->selectedCategory = collect($this->categories)->first()->id;
        $this->products = $this->categories
            ->first()
            ->products()
            ->get();
        $this->selectedProduct = collect($this->products)->first();
    }

    public function render()
    {
        return view('livewire.setup-customer-transaction');
    }

    public function updatedSelectedCategory($category): void
    {
        $this->selectedCategory = collect($this->categories)->filter(fn (Category $value) => $value->id == $category)->first()->id;
        $this->products = Product::where('category_id', $category)->get();

        if ($this->products->first()) {
            $this->updatedSelectedProduct($this->products->first()->id);
        }
    }

    public function updatedSelectedProduct($product): void
    {
        $this->selectedProduct = collect($this->products)->first(fn(Product $value) => $value->id == $product);
    }

    public function updatedProductQuantity($productQuantity): void
    {
        $this->productQuantity = $productQuantity;
        $this->productPrice = (float) $productQuantity * (float) $this->selectedProduct['price'];
    }

    public function confirmProduct(): void
    {
        $this->confirmedProducts[] = [
            'category' => collect($this->categories)
                ->filter(fn(Category $category) => $category->id == $this->selectedCategory)
                ->first(),
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
        foreach ($this->confirmedProducts as $confirmedProduct) {
            $this->transaction->purchases()->create([
                'product_id' => (int) $confirmedProduct['product']['id'],
                'quantity' => (int) $confirmedProduct['quantity'],
            ]);
        }
        redirect()->route('transaction.index');
    }
}
