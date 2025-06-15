@extends('layouts.layouts-landing')

@section('title', 'details')

@section('content')


    <main class="container mx-auto mt-10 px-6 max-w-7xl">
        <div class="product-card flex flex-col md:flex-row" data-id="{{ $query->id }}" data-name="{{ $query->name }}"
            data-price="{{ $query->price }}" data-image="{{ $query->getPrimaryImage() }}"
            data-category="{{ $query->category->name }}">
            <div class="md:w-1/2">
                <img alt="{{ $query->name }}" class="w-full h-96 object-cover rounded-lg border shadow-lg" height="400"
                    src="{{ $query->getPrimaryImage() }}" width="600" />

            </div>
            <div class="md:w-1/2 md:pl-10 mt-6 md:mt-0">
                <h1 class="text-3xl font-bold">
                    {{ $query->name }}
                </h1>
                <p class="mt-4 text-yellow-600 lg:text-4xl text-3xl font-bold">
                    {{ $query->formatted_price }}
                </p>

                <button
                    class="add-to-cart px-4 py-2 sm:px-4 sm:py-2 text-sm mt-4 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition-colors">
                    <i class="fa fa-shopping-cart mr-2"></i>
                    Tambah Keranjang
                </button>
            </div>
        </div>
        <section class="mt-16">
            <h2 class="text-2xl font-bold">
                Deskripsi Produk
            </h2>
            <p class="mt-4 text-gray-600">
                {!! nl2br($query->description) !!}
            </p>
        </section>
        <section class="mt-16">
            <h2 class="text-2xl font-bold mb-10 text-center">
                PRODUK LAIN YANG SERUPA
            </h2>
            <div class="grid grid-cols-2 gap-4 sm:gap-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @forelse ($products as $product)
                    <a href="/detail/{{ $product->slug }}">
                        <div class="product-card bg-white rounded-lg overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300"
                            data-id="{{ $product->id }}" data-name="{{ $product->name }}"
                            data-price="{{ $product->price }}" data-image="{{ $product->getPrimaryImage() }}"
                            data-category="{{ $product->category->name }}">
                            <div class="aspect-w-1 aspect-h-1">
                                <img src="{{ $product->getPrimaryImage() }}" alt="{{ $product->name }}"
                                    class="w-full h-48 sm:h-72 object-cover">
                            </div>
                            <div class="p-3 sm:p-4">
                                <h3 class="product-name text-base sm:text-lg font-medium text-gray-900">
                                    {{ $product->name }}
                                </h3>
                                <p class="product-description mt-1 text-xs sm:text-sm text-gray-500">
                                    {{ Str::limit($product->description, 100) }}
                                </p>
                                <div class="mt-4 flex items-center justify-between">
                                    <p class="text-base sm:text-lg font-semibold text-yellow-600">
                                        {{ $product->formatted_price }}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="col-span-full text-center py-8 sm:py-12">
                        <h3 class="text-base sm:text-lg font-medium text-gray-900">No products found</h3>
                        <p class="mt-2 text-sm text-gray-500">Try adjusting your search or filter</p>
                    </div>
                @endforelse
            </div>
        </section>
    </main>

@endsection

@push('scripts')
    <script type="module" src="{{ asset('js/app.js') }}"></script>
@endpush
