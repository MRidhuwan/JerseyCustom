<div class="container">
    <div class="row mb-2">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List Jersey</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-md-9">
            <h2>{{ $title }}</h2>
        </div>
        <div class="col-md-3">
            <div class="input-group mb-3">
                <input type="text" wire:model="search" class="form-control" placeholder="Search . . ." />
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="fas fa-search"></i>
                    </span>
                </div>

            </div>
        </div>
    </div>

    <section class="products mb-5">
        <div class="row mt-5">
            @foreach($products as $product)
            <div class="col-md-3 mb-5">
                <div class="card">
                    <div class="card-body text-center mb-9">
                        <img src="{{ asset('assets/jersey/'. $product->gambar) }}" class="img-fluid">
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h5><strong>{{ $product->nama }}</strong> </h5>
                                <h5>Rp. {{ number_format($product->harga) }}</h5>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <a href="{{ route('products.detail', $product->id) }}"
                                    class="btn btn-success btn-block">
                                    <i class="fas fa-eye"> </i> Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="row">
            <div class="col">
                {{ $products->links() }}
            </div>
        </div>
    </section>
</div>