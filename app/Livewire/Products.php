<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.products', [
            'products' => Product::paginate(8), // 8 products per page
        ]);
    }
}
