<?php

use Livewire\Volt\Component;
use App\Models\Product;
new class extends Component {

    public $product;
    public function mount(Product $product){
        $this->product = $product;
    }
}; ?>

<div class="col-sm-6 col-lg-4 col-xl-3 product-item" data-aos="fade-up">
    <a href="{{ route('public.products.show', $product->slug) }}" class="product-grid-card">
        
        <img 
            src="{{ $product->thumbnail ? asset($product->thumbnail) : asset('static/assets/img/default.png') }}" 
            alt="{{ $product->name }}" 
        />

        <div class="card-body">
            <span class="product-category">
                {{ $product->partner->name ?? 'Category' }}
            </span>

            <h4 class="h5 mb-2">
                {{ $product->name }}
            </h4>

            <p class="product-note">
                {{ Str::limit($product->description, 60) }}
            </p>
        </div>
    </a>
</div>