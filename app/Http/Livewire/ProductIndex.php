<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;

class ProductIndex extends Component
{
    public $search;

    protected $queryString = [
        'search'
    ];

    public function mount()
    {
        $this->search = request()->query('search', $this->search);
    }


    public function render()
    {
        return view(
            'livewire.product-index',
            [
                'products' => $this->search === null ?
                    Product::latest()->paginate(8) :
                    Product::where('nama', 'like', '%' . $this->search . '%')
                    ->latest()->paginate(8),
                'title' => 'List Jersey'
            ]
        )->extends('layouts.app')
            ->section('content');
    }
}
